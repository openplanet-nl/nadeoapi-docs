<p class="title"><?= Nin\Html::encode($page->meta['name']) ?></p>

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

<?php if (isset($page->meta['audience'])) { ?>
	<hr>
	<div class="content">
		<p><b>Headers:</b></p>
		<ul>
			<li>
				<code>Authorization: nadeo_v1 t=<span class="has-text-weight-bold has-text-primary">{token}</span></code>
				<span>An <a href="/glossary#access-token">access token</a> for the <code><?= Nin\Html::encode($page->meta['audience']) ?></code> <a href="/glossary#audience">audience</a></span>
			</li>
		</ul>
	</div>
<?php } ?>

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
		$params_body = $params['body'];
		?>
		<hr>
		<div class="content">
			<p><b>Body parameters:</b></p>
			<ul>
				<?php
				foreach ($params_body as $item) {
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
