<?php

$this->title = 'Управление заявками';

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light mt-5">
	<a class="navbar-brand" href="#">Управление заявками</a>
	<a href="/manager/logout" class="btn btn-sm btn-outline-secondary">Выход</a>
</nav>

<hr class="my-4">

<table class="table">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Имя</th>
			<th scope="col">Адрес</th>
			<th scope="col">E-mail</th>
			<th scope="col">Телефон</th>
			<th scope="col"></th>
		</tr>
	</thead>

	<tbody>
<?php
	foreach($data['claims'] as $claim) {
?>
		<tr>
			<td><?= $claim['id'] ?></td>
			<td><?= $claim['name'] ?></td>
			<td><?= $claim['address'] ?></td>
			<td><?= $claim['email'] ?></td>
			<td><?= $claim['phone'] ?></td>
			<td>
				<a href="/manager/edit/<?= $claim['id'] ?>" class="btn btn-primary">Просмотр / редактирование</a>
				<a href="/manager/delete/<?= $claim['id'] ?>" class="btn btn-danger">Удалить</a>
			</td>
		</tr>
<?php
	}
?>
	</tbody>
</table>
