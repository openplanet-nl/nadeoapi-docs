<?php
function renderListItem(string $path, $page)
{
	echo '<li>';
	echo '<a href="/' . Nin\Html::encode($path . '/' . $page['path']) . '">';
	echo Nin\Html::encode($page['name']);
	echo '</a>';
	if (isset($page['children']) && count($page['children']) > 0) {
		echo '<ul>';
		foreach ($page['children'] as $child) {
			renderListItem($path . '/' . $page['path'], $child);
		}
		echo '</ul>';
	}
	echo '</li>';
}
?>

<div class="content">
	<ul>
		<?php
		foreach ($info['children'] as $page) {
			renderListItem($path, $page);
		}
		?>
	</ul>
</div>
