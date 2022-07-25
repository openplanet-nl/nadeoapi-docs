<?php

class Controller extends Nin\Controller
{
	public string $description = 'Documentation on Nadeo\'s Trackmania live services API.';

	public function renderSideMenu($docs_dir = null)
	{
		global $nf_www_dir;
		if (is_null($docs_dir)) $docs_dir = realpath($nf_www_dir . '/../docs');
		$menu = [];
		$dir = new DirectoryIterator($docs_dir);
		foreach ($dir as $fileinfo) {
			if ($fileinfo->isDot()) {
				continue;
			}
			if ($fileinfo->isDir()) {
				$menu[] = [
					'type' => 'directory',
					'name' => $fileinfo->getFilename(),
					'children' => $this->renderSideMenu($fileinfo->getPathname()),
				];
				continue;
			}
			if (!str_ends_with($fileinfo->getFilename(), '.md')) {
				continue;
			}
			$path = $fileinfo->getFilename();
			$path = substr($path, 0, -3);

			$markdown_contents = file_get_contents($fileinfo->getPathname());
			$markdown_contents = str_replace("\r\n", "\n", $markdown_contents);

			$frontmatter = false;
			$content = '';

			if (str_starts_with($markdown_contents, "---\n")) {
				$next_pos = strpos($markdown_contents, "\n---", 4);
				$frontmatter = substr($markdown_contents, 4, $next_pos - 4);
				$content = substr($markdown_contents, $next_pos + 4);
			} else {
				$content = $markdown_contents;
			}

			$parsedown = new Parsedown();
			$html = $parsedown->text($content);

			if ($frontmatter === false) {
				$menu[] = [
					'type' => 'page',
					'name' => $path,
					'path' => $path,
				];
				continue;
			}

			$meta = yaml_parse($frontmatter);

			$menu[] = [
				'type' => 'page',
				'name' => $meta["name"],
				'path' => $path,
			];
		}
		return $menu;
	}
}
