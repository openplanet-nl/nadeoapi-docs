<p class="title"><?= Nin\Html::encode($meta['name']) ?></p>
<p class="subtitle"><?= Nin\Html::encode($meta['audience']) ?></p>

<code>
	<span class="has-text-weight-bold has-text-<?php
	switch ($meta['method']) {
		case 'GET': echo 'success'; break;
		case 'POST': echo 'danger'; break;
	}
	?>"><?= Nin\Html::encode($meta['method']) ?></span>
	<span class="has-text-grey"><?= Nin\Html::encode($meta['url']) ?></span><?= $route_html ?>
</code>

<?php
if (isset($meta['parameters'])) {
	$params = $meta['parameters'];

	if (isset($params['path'])) {
		$params_path = $params['path'];
		?>
		<hr>
		<div class="content">
			<p><b>Path parameters:</b></p>
			<ul>
				<?php
				foreach ($params_path as $item) {
					echo $this->renderPartial('api-param', [
						'class' => 'warning',
						'item' => $item,
					]);
				}
				?>
			</ul>
		</div>
		<?php
	}

	if (isset($params['query'])) {
		$params_query = $params['query'];
		?>
		<hr>
		<div class="content">
			<p><b>Query parameters:</b></p>
			<ul>
				<?php
				foreach ($params_query as $item) {
					echo $this->renderPartial('api-param', [
						'class' => 'info',
						'item' => $item,
					]);
				}
				?>
			</ul>
		</div>
		<?php
	}
}
?>

<hr>

<div class="content">
	<?= $html ?>
</div>
