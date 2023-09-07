<p class="title"><?= Nin\Html::encode($page->meta['name']) ?></p>
<?php if (isset($page->meta['audience'])) { ?>
	<p class="subtitle">Audience: <code><?= Nin\Html::encode($page->meta['audience']) ?></code></p>
<?php } ?>

<?php if (isset($page->meta['warning'])) { ?>
	<div class="notification is-warning">
		<span class="icon"><i class="fa fa-warning"></i></span>
		<span><?= Nin\Html::encode($page->meta['warning']) ?></span>
	</div>
<?php } ?>

<?php if (isset($page->meta['danger'])) { ?>
	<div class="notification is-danger">
		<span class="icon"><i class="fa fa-ban"></i></span>
		<span><?= Nin\Html::encode($page->meta['danger']) ?></span>
	</div>
<?php } ?>

<code>
	<span class="has-text-weight-bold has-text-<?php
	switch ($page->meta['method']) {
		case 'GET': echo 'success'; break;
		case 'POST': echo 'danger'; break;
	}
	?>"><?= Nin\Html::encode($page->meta['method']) ?></span>
	<?= $page->getRouteHtml() ?>
</code>

<?php
if (isset($page->meta['parameters'])) {
	$params = $page->meta['parameters'];

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

	if (isset($params['body'])) {
		$params_path = $params['body'];
		?>
		<hr>
		<div class="content">
			<p><b>Body parameters:</b></p>
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
}
?>

<hr>

<div class="content">
	<?= $page->getHtml() ?>
</div>
