<?php

class IndexController extends Controller
{
	public function actionPage(string $path = '')
	{
		global $nf_www_dir;

		if (!preg_match('/^[a-z0-9\\-_\\/]*$/', $path)) {
			$this->displayError('Invalid path', 400);
			return;
		}

		if (str_ends_with($path, '/')) {
			$path = substr($path, 0, -1);
		}

		if ($path == 'index' || str_ends_with($path, '/index')) {
			$base = dirname($path);
			if ($base == '.') {
				$base = '';
			}
			$this->redirect('/' . $base, 301);
			return;
		}

		$docs_dir = realpath($nf_www_dir . '/../docs');

		$page_path = $docs_dir . '/' . $path . '.md';
		if (!file_exists($page_path)) {
			$page_path = $docs_dir . '/';
			if ($path == '') {
				$page_path .= 'index.md';
			} else {
				$page_path .= $path . '/index.md';
			}
			if (!file_exists($page_path)) {
				$this->displayError('Page not found: ' . $path, 404);
				return;
			}
		}

		$this->renderPage($page_path);
	}

	private function renderPage(string $file_path)
	{
		$page = new PageInfo($file_path);

		$this->title = $page->getName();

		$this->render($page->getView(), [
			'page' => $page,
		]);
	}
}
