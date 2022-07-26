<aside class="menu">
	<p class="menu-label">General</p>
	<ul class="menu-list">
		<?php
		echo $this->renderPartial('/menu/item', [
			'path' => '',
			'item' => [
				'path' => '',
				'name' => 'Home',
			],
			'show_children' => false,
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

	<?php
	foreach ($index as $item) {
		if ($item['type'] != 'dir') {
			continue;
		}
		?>
		<p class="menu-label"><?= Nin\Html::encode($item['name']) ?></p>
		<ul class="menu-list">
			<?php
			echo $this->renderPartial('/menu/item', [
				'path' => '',
				'item' => $item,
				'show_children' => false,
			]);

			foreach ($item['children'] as $child) {
				echo $this->renderPartial('/menu/item', [
					'path' => $item['path'] . '/',
					'item' => $child,
				]);
			}
			?>
		</ul>
		<?php
	}
	?>
</aside>
