<aside class="menu">
	<p class="menu-label">General</p>
	<ul class="menu-list">
		<?php
		echo $this->renderPartial('/menu/item', [
			'path' => '',
			'item' => [
				'type' => 'page',
				'path' => '',
				'icon' => 'fa-home',
				'name' => 'Home',
			],
		]);

		foreach ($index as $item) {
			if ($item['type'] != 'page') {
				continue;
			}
			echo $this->renderPartial('/menu/item', [
				'path' => '',
				'item' => $item,
			]);
		}
		?>
	</ul>

	<p class="menu-label">Reference</p>
	<ul class="menu-list">
		<?php
		foreach ($index as $item) {
			if ($item['type'] != 'dir') {
				continue;
			}
			echo $this->renderPartial('/menu/item', [
				'path' => '',
				'item' => $item,
			]);
		}
		?>
	</ul>

	<?php
	foreach ($index as $root) {
		if ($root['type'] != 'root') {
			continue;
		}
		?>
		<p class="menu-label"><?= Nin\Html::encode($root['name']) ?></p>
		<ul class="menu-list">
			<?php
			foreach ($root['children'] as $item) {
				echo $this->renderPartial('/menu/item', [
					'path' => $root['path'] . '/',
					'item' => $item,
				]);
			}
			?>
		</ul>
		<?php
	}
	?>
</aside>
