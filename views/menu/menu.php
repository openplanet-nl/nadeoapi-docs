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
			if ($item['category'] != 'general') {
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
			if ($item['category'] != 'reference') {
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

	<p class="menu-label">Contribute</p>
	<ul class="menu-list">
		<li><a href="https://github.com/openplanet-nl/nadeoapi-docs" target="blank" rel="noopener noreferrer">
			<span class="icon"><i class="fa fa-github"></i></span>
			<span>Github</span>
		</a></li>
		<li><a href="https://openplanet.dev/link/discord" target="blank" rel="noopener noreferrer">
			<span class="icon"><i class="fa fa-discord"></i></span>
			<span>Discord</span>
		</a></li>
	</ul>
</aside>
