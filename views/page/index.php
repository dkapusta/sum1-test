<?php

$this->title = 'Оставить заявку';

?>
<div class="jumbotron mt-5">
	<h1 class="display-4">Заявка на оказание услуг</h1>
	<p class="lead">
		Оставьте Ваши данные, и наш менеджер с Вами свяжется.
		<a href="/manager" class="float-right btn btn-primary">Управление заявками</a>
	</p>

	<hr class="my-4">

	<form method="post" action="/page/save">
		<div class="form-group">
			<label for="inputName">ФИО</label>
			<input type="text" class="form-control" id="inputName" name="form[name]" placeholder="Ваше имя" required>
		</div>
		<div class="form-group">
			<label for="inputAddress">Адрес</label>
			<input type="text" class="form-control" id="inputAddress" name="form[address]" placeholder="Ваш адрес" required>
		</div>
		<div class="form-group">
			<label for="inputEmail">E-mail</label>
			<input type="email" class="form-control" id="inputEmail" name="form[email]" placeholder="Электронная почта" required>
		</div>
		<div class="form-group">
			<label for="inputPhone">Телефон</label>
			<input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" id="inputPhone" name="form[phone]" placeholder="Номер телефона" required>
			<small id="phoneHelp" class="form-text text-muted">Формат номера телефона: XXX-XXX-XXXX</small>
		</div>
		<div class="form-group">
			<label for="inputMessage">Сообщение</label>
			<textarea id="inputMessage" name="form[message]" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<input type="checkbox" id="inputTerms" required>
			<label for="inputTerms">Согласен на обработку персональных данных</label>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-lg">Отправить</button>
		</div>
	</form>
</div>
