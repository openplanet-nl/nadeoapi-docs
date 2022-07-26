<?php
global $nf_uri;

$url = '/' . $path . $item['path'];
$active = ($nf_uri == $url);

$show_children = isset($show_children) ? $show_children : true;
?>
<li>
	<a href="<?= Nin\Html::encode($url) ?>" <?= $active ? 'class="is-active"' : '' ?>>
		<?= Nin\Html::encode($item['name']) ?>
	</a>

	<?php if ($show_children && isset($item['children'])) { ?>
		<ul>
			<?php
			foreach ($item['children'] as $child) {
				echo $this->renderPartial('/menu/item', [
					'path' => $path . $item['path'] . '/',
					'item' => $child,
				]);
			}
			?>
		</ul>
	<?php } ?>
</li>
