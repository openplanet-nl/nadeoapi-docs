<?php

class IndexController extends Controller
{
	public function actionPage(string $path = '')
	{
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

		$indexInfo = false;
		if ($path != '') {
			$indexInfo = $this->getPageIndexInfo($path);
			if ($indexInfo === false) {
				$this->render404($path);
				return;
			}
		}

		$this->renderPage($path, $indexInfo);
	}

	private function render404(string $path)
	{
		$this->displayError('Page not found: ' . $path, 404);
	}

	private function renderIndex(string $path, $info)
	{
		$this->title = $info['name'];

		$this->render('page-index', [
			'path' => $path,
			'info' => $info,
		]);
	}

	private function renderPage(string $path, $info)
	{
		global $nf_project_dir;

		$docs_dir = realpath($nf_project_dir . '/docs');

		$page_path = $docs_dir . '/' . $path . '.md';
		if (!file_exists($page_path)) {
			$page_path = $docs_dir . '/';
			if ($path == '') {
				$page_path .= 'index.md';
			} else {
				$page_path .= $path . '/index.md';
			}
			if (!file_exists($page_path)) {
				$this->renderIndex($path, $info);
				return;
			}
		}

		$page = new PageInfo($page_path);

		$this->title = $page->getName();

		$this->render($page->getView(), [
			'path' => $path,
			'page' => $page,
			'info' => $info,
		]);
	}

	public function actionApiIndex()
	{
		header('Content-Type: application/json');
		echo json_encode($this->getPageIndex());
	}
}
