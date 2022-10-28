<?php
global $nf_uri;

$url = '/' . $path . $item['path'];
$active = false;
if ($url != '/') {
	$active = str_starts_with($nf_uri, $url);
} else {
	$active = ($nf_uri == $url);
}
?>
<li>
	<a href="<?= Nin\Html::encode($url) ?>" <?= $active ? 'class="is-active"' : '' ?>>
		<?php if ($item['icon'] != '') { ?>
			<span class="icon"><i class="fa <?= $item['icon'] ?>"></i></span>
		<?php } ?>
		<?= Nin\Html::encode($item['name']) ?>
	</a>

	<?php if ($active && isset($item['children'])) { ?>
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
