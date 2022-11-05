#!python3

import os
import re
import yaml

def parse_frontmatter(fh):
	text = ''
	while True:
		line = fh.readline()
		if not line or line == '---\n':
			break
		text += line
	return yaml.safe_load(text)

def test_valid_link(link):
	if not link.startswith('/'):
		raise Exception('Internal link must start with a slash: "' + link + '"')

	path, anchor = re.findall('^/(.+?)(#.+)?$', link)[0]

	if not os.path.exists('docs/' + path) and not os.path.exists('docs/' + path + '.md'):
		raise Exception('Internal link goes to a non-existing page: "' + link + '"')

def test_valid_link_targets(content):
	for link in re.findall('\\[.+\\]\\((.+?)\\)', content):
		if link.startswith('http://'):
			raise Exception('Insecure link on page: "' + link + '"')
		elif link.startswith('https://'):
			pass # External links are fine
		elif link.startswith('#'):
			pass # Anchor links are fine
		else:
			test_valid_link(link)

def test_valid_frontmatter(path, frontmatter):
	if frontmatter == False:
		return

	relative_path = os.path.dirname(path)

	if 'pages' in frontmatter:
		for page in frontmatter['pages']:
			page_path = relative_path + '/' + page + '.md'
			if not os.path.exists(page_path):
				raise Exception('Page in frontmatter does not exist: "' + page + '" (looking for "' + page_path + '")')

	if 'dirs' in frontmatter:
		for dir in frontmatter['dirs']:
			dir_path = relative_path + '/' + dir
			if not os.path.exists(dir_path):
				raise Exception('Directory in frontmatter does not exist: "' + dir + '" (looking for "' + dir_path + '")')

	if 'roots' in frontmatter:
		for root in frontmatter['roots']:
			root_path = relative_path + '/' + root
			if not os.path.exists(root_path):
				raise Exception('Root in frontmatter does not exist: "' + root + '" (looking for "' + root_path + '")')

def test_page(path, frontmatter, content):
	print('Page: ' + path)

	test_valid_frontmatter(path, frontmatter)
	test_valid_link_targets(content)

def test_file(path):
	line_number = 0
	frontmatter = False
	content = ''

	fh = open(path, 'r')
	while True:
		line = fh.readline()
		if not line:
			break

		if line_number == 0 and line == '---\n':
			frontmatter = parse_frontmatter(fh)
			line_number += 1
			continue

		content += line
		line_number += 1

	test_page(path, frontmatter, content)

	fh.close()

def test_dir(path = ''):
	with os.scandir('docs/' + path) as it:
		for entry in it:
			if entry.is_file():
				test_file('docs/' + path + entry.name)
			else:
				test_dir(path + entry.name + '/')

test_dir()
print('\nAll tests passed!')
