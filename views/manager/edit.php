<?php

$this->title = 'Просмотр / редактирование заявки';

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light mt-5">
	<a class="navbar-brand" href="#">Управление заявками</a>
	<a href="/manager/logout" class="btn btn-sm btn-outline-secondary">Выход</a>
</nav>

<hr class="my-4">

<form method="post" action="/manager/edit/<?= $data['claim']['id'] ?>">
	<div class="alert alert-info">
		Заявка №<?= $data['claim']['id'] ?>
		<a href="/manager">< Назад ко всем заявкам</a>
	</div>

	<input type="hidden" name="form[id]" value="<?= $data['claim']['id'] ?>">

	<div class="form-group">
		<label for="inputName">ФИО</label>
		<input type="text" class="form-control" id="inputName" name="form[name]" placeholder="Ваше имя" value="<?= $data['claim']['name'] ?>">
	</div>
	<div class="form-group">
		<label for="inputAddress">Адрес</label>
		<input type="text" class="form-control" id="inputAddress" name="form[address]" placeholder="Ваш адрес" value="<?= $data['claim']['address'] ?>">
	</div>
	<div class="form-group">
		<label for="inputEmail">E-mail</label>
		<input type="email" class="form-control" id="inputEmail" name="form[email]" placeholder="Электронная почта" value="<?= $data['claim']['email'] ?>">
	</div>
	<div class="form-group">
		<label for="inputPhone">Телефон</label>
		<input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" id="inputPhone" name="form[phone]" placeholder="Номер телефона" value="<?= $data['claim']['phone'] ?>">
		<small id="phoneHelp" class="form-text text-muted">Формат номера телефона: XXX-XXX-XXXX</small>
	</div>
	<div class="form-group">
		<label for="inputMessage">Сообщение</label>
		<textarea id="inputMessage" name="form[message]" class="form-control"><?= $data['claim']['message'] ?></textarea>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary btn-lg">Сохранить</button>
	</div>
</form>
