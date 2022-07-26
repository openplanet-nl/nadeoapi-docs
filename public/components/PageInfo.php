<?php

class PageInfo
{
	public array|bool $meta = false;
	public string $markdown = '';

	public function __construct(string $path)
	{
		$markdown_contents = file_get_contents($path);
		$markdown_contents = str_replace("\r\n", "\n", $markdown_contents);

		if (str_starts_with($markdown_contents, "---\n")) {
			$next_pos = strpos($markdown_contents, "\n---", 4);
			$frontmatter = substr($markdown_contents, 4, $next_pos - 4);
			$this->meta = yaml_parse($frontmatter);
			$this->markdown = trim(substr($markdown_contents, $next_pos + 4));
		} else {
			$this->markdown = trim($markdown_contents);
		}
	}

	public function isAPIEndpoint()
	{
		return $this->meta !== false && isset($this->meta['route']);
	}

	public function isAPIIndex()
	{
		return $this->meta !== false && isset($this->meta['index']);
	}

	public function getPosition()
	{
		if ($this->meta !== false && isset($this->meta['position'])) {
			return intval($this->meta['position']);
		}
		return 0;
	}

	public function getName()
	{
		if ($this->meta !== false && isset($this->meta['name'])) {
			return $this->meta['name'];
		}

		$matchTitle = false;
		if (preg_match('/^# (.*)/', $this->markdown, $matchTitle)) {
			return $matchTitle[1];
		}

		return '';
	}

	public function getView()
	{
		if ($this->isAPIEndpoint()) {
			return 'api';
		}
		return 'page';
	}

	public function getHtml()
	{
		$parsedown = new Parsedown();
		return $parsedown->text($this->markdown);
	}

	public function getRouteHtml()
	{
		if (!$this->isAPIEndpoint()) {
			return false;
		}

		$ret = '<span class="has-text-grey">' . Nin\Html::encode($this->meta['url']) . '</span>';

		$ret .= preg_replace_callback('/\\{([a-zA-Z0-9]+)\\}/', function($m) {
			return '<span class="has-text-weight-bold has-text-warning">' . $m[0] . '</span>';
		}, Nin\Html::encode($this->meta['route']));

		if (isset($meta['parameters']) && isset($meta['parameters']['query'])) {
			$n = 0;
			foreach ($meta['parameters']['query'] as $item) {
				if (!isset($item['required']) || !$item['required']) {
					continue;
				}
				if ($n == 0) {
					$ret .= '?';
				} else {
					$ret .= '&';
				}
				$n++;
				$ret .= Nin\Html::encode($item['name']) . '=';
				$ret .= '<span class="has-text-weight-bold has-text-info">';
				$ret .= '{' . Nin\Html::encode($item['name']) . '}';
				$ret .= '</span>';
			}
		}

		return $ret;
	}
}
