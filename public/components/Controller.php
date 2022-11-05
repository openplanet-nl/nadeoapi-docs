<?php

class Controller extends Nin\Controller
{
	public string $description = 'Documentation on Nadeo\'s Trackmania live services API.';

	private function buildPageIndexStructure(array $dirs, array $pages, array $roots = [])
	{
		usort($pages, function($a, $b) {
			return $a['position'] - $b['position'];
		});

		$ret = [];
		foreach ($pages as $page) {
			$ret[] = $page;
		}
		foreach ($dirs as $dir) {
			$ret[] = $dir;
		}
		foreach ($roots as $root) {
			$ret[] = $root;
		}
		return $ret;
	}

	private function getPageIndexInternal(string|null $docs_dir = null)
	{
		global $nf_www_dir;
		if ($docs_dir === null) {
			$docs_dir = realpath($nf_www_dir . '/../docs');
		}

		$index_path = $docs_dir . '/index.md';
		if (file_exists($index_path)) {
			$index_page = new PageInfo($index_path);

			if ($index_page->meta !== null && isset($index_page->meta['dirs']) || isset($index_page->meta['pages'])) {
				$roots = [];
				$dirs = [];
				$pages = [];

				if (isset($index_page->meta['roots'])) {
					foreach ($index_page->meta['roots'] as $root) {
						$root_index_path = $docs_dir . '/' . $root . '/index.md';
						$root_index_page = false;
						if (file_exists($root_index_path)) {
							$root_index_page = new PageInfo($root_index_path);
						}

						$roots[] = [
							'type' => 'root',
							'name' => $root_index_page->meta['name'] ?? str_replace('-', ' ', ucfirst($root)),
							'icon' => $index_page->meta['icon'] ?? '',
							'path' => $root,
							'children' => $this->getPageIndexInternal($docs_dir . '/' . $root),
						];
					}
				}

				if (isset($index_page->meta['dirs'])) {
					foreach ($index_page->meta['dirs'] as $dir) {
						$dir_index_path = $docs_dir . '/' . $dir . '/index.md';
						$dir_index_page = false;
						if (file_exists($dir_index_path)) {
							$dir_index_page = new PageInfo($dir_index_path);
						}

						$dirs[] = [
							'type' => 'dir',
							'name' => $dir_index_page->meta['name'] ?? str_replace('-', ' ', ucfirst($dir)),
							'icon' => $index_page->meta['icon'] ?? '',
							'path' => $dir,
							'children' => $this->getPageIndexInternal($docs_dir . '/' . $dir),
						];
					}
				}

				if (isset($index_page->meta['pages'])) {
					foreach ($index_page->meta['pages'] as $page_name) {
						$page_path = $docs_dir . '/' . $page_name . '.md';
						if (!file_exists($page_path)) {
							continue;
						}

						$page = new PageInfo($page_path);

						$pages[] = [
							'type' => 'page',
							'name' => $page->getName(),
							'icon' => $page->meta['icon'] ?? '',
							'path' => $page_name,
							'position' => $page->getPosition(),
						];
					}
				}

				return $this->buildPageIndexStructure($dirs, $pages, $roots);
			}
		}

		$dirs = [];
		$pages = [];

		$dir = new DirectoryIterator($docs_dir);
		foreach ($dir as $fileinfo) {
			if ($fileinfo->isDot()) {
				continue;
			}

			$path = $fileinfo->getPathname();
			$filename = pathinfo($path, PATHINFO_FILENAME);
			$ext = pathinfo($path, PATHINFO_EXTENSION);

			if ($fileinfo->isDir()) {
				$dirs[] = [
					'type' => 'dir',
					'name' => str_replace('-', ' ', ucfirst($filename)),
					'icon' => '',
					'path' => $filename,
					'children' => $this->getPageIndexInternal($path),
				];
				continue;
			}

			if ($ext != 'md') {
				continue;
			}

			if ($filename == 'index') {
				continue;
			}

			$page = new PageInfo($docs_dir . '/' . $filename . '.md');

			$pages[] = [
				'type' => 'page',
				'name' => $page->getName(),
				'icon' => $page->meta['icon'] ?? '',
				'path' => $filename,
				'position' => $page->getPosition(),
			];
		}

		return $this->buildPageIndexStructure($dirs, $pages);
	}

	public function getPageIndex()
	{
		return nf_cache()->take('page_index', 3600, function() {
			return $this->getPageIndexInternal();
		});
	}

	public function getPageIndexInfo(string $path)
	{
		$info = false;
		$index = $this->getPageIndex();

		$parts = explode('/', $path);
		foreach ($parts as $part) {
			$found = false;
			foreach ($index as $page) {
				if ($page['path'] == $part) {
					if (!isset($page['children'])) {
						return $page;
					}
					$index = $page['children'];
					$info = $page;
					$found = true;
					break;
				}
			}
			if (!$found) {
				return false;
			}
		}

		return $info;
	}

	public function getBreadcrumbs()
	{
		global $nf_uri;
		$parts = explode('/', trim($nf_uri, '/'));

		$ret = [];

		$path = '';
		foreach ($parts as $part) {
			$info = $this->getPageIndexInfo($path . $part);
			if ($info === false) {
				return [];
			}
			$ret[] = [
				'name' => $info['name'],
				'path' => $path . $part,
			];
			$path .= $part . '/';
		}

		return $ret;
	}
}
