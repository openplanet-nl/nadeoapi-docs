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
		$markdown_contents = file_get_contents($file_path);
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
			$this->render('page', [
				'html' => $html,
			]);
			return;
		}

		$meta = yaml_parse($frontmatter);

		$route_html = preg_replace_callback('/\\{([a-zA-Z0-9]+)\\}/', function($m) {
			return '<span class="has-text-weight-bold has-text-warning">' . $m[0] . '</span>';
		}, Nin\Html::encode($meta['route']));

		//TODO: Opengraph stuff

		if (isset($meta['parameters']) && isset($meta['parameters']['query'])) {
			$n = 0;
			foreach ($meta['parameters']['query'] as $item) {
				if (!isset($item['required']) || !$item['required']) {
					continue;
				}
				if ($n == 0) {
					$route_html .= '?';
				} else {
					$route_html .= '&';
				}
				$n++;
				$route_html .= Nin\Html::encode($item['name']) . '=';
				$route_html .= '<span class="has-text-weight-bold has-text-info">';
				$route_html .= '{' . Nin\Html::encode($item['name']) . '}';
				$route_html .= '</span>';
			}
		}

		$this->render('api', [
			'meta' => $meta,
			'route_html' => $route_html,
			'html' => $html,
		]);
	}
}
