<h1 class="title"><?= $info['name'] ?></h1>

<?= $this->renderPartial('page-list', [
	'path' => $path,
	'info' => $info,
]) ?>
