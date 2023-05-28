<li>
	<code class="has-text-weight-bold has-text-<?= $class ?>">{<?= Nin\Html::encode($item['name']) ?>}</code>
	<span class="has-text-grey">(<?= Nin\Html::encode($item['type']) ?>)</span>
	<span><?= Nin\Html::encode($item['description']) ?></span>

	<?php if (isset($item['required']) && $item['required']) { ?>
		<span class="has-text-danger" title="Required">*</span>
	<?php } ?>

	<?php if (isset($item['default']) || isset($item['min']) || isset($item['max'])) { ?>
		<div class="is-size-6 has-text-grey mt-1">
			<?php if (isset($item['min'])) { ?>
				<span>Minimum:</span>
				<code><?= Nin\Html::encode($item['min']) ?></code>
			<?php } ?>
			<?php if (isset($item['max'])) { ?>
				<span>Maximum:</span>
				<code><?= Nin\Html::encode($item['max']) ?></code>
			<?php } ?>
			<?php if (isset($item['default'])) { ?>
				<span>Default:</span>
				<code><?= Nin\Html::encode($item['default']) ?></code>
			<?php } ?>
		</div>
	<?php } ?>
</li>
