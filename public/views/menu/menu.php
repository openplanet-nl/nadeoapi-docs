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
</aside>
