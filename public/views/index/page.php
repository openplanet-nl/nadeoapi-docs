<div class="content">
	<?= $page->getHtml() ?>
</div>

<?php if (isset($info['children'])) { ?>
	<hr>

	<?= $this->renderPartial('page-list', [
		'path' => $path,
		'info' => $info,
	]) ?>
<?php } ?>
