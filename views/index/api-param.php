<li>
	<code class="has-text-weight-bold has-text-<?= $class ?>">{<?= Nin\Html::encode($item['name']) ?>}</code>
	<span class="has-text-grey">(<?= Nin\Html::encode($item['type']) ?>)</span>
	<span><?= Nin\Html::encode($item['description']) ?></span>

	<?php if (isset($item['required']) && $item['required']) { ?>
		<span class="has-text-danger" title="Required">*</span>
	<?php } ?>

	<?php if (isset($item['default'])) { ?>
		<ul><li>
			<span>Default:</span>
			<code><?= Nin\Html::encode($item['default']) ?></code>
		</li></ul>
	<?php } ?>
</li>
