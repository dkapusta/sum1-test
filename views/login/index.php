<?php

$this->title = 'Авторизация';

?>
<div class="jumbotron mt-5">
	<h1 class="display-4">Авторизация</h1>
	<p class="lead">
		Для доступа к разделу нужно авторизоваться.
		<a href="/" class="float-right btn btn-primary">Назад на главную</a>
	</p>

	<hr class="my-4">

	<?php
		if (isset($_GET['error'])) {
			?>
	<div class="alert alert-warning">Неверный логин или пароль</div>
			<?php
		}
	?>

	<form method="post" action="/login/try">
		<div class="form-group">
			<label for="inputLogin">Логин</label>
			<input type="text" class="form-control" id="inputLogin" name="form[login]" required>
		</div>
		<div class="form-group">
			<label for="inputPassword">Пароль</label>
			<input type="password" class="form-control" id="inputPassword" name="form[password]" required>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-lg">Войти</button>
		</div>
	</form>
</div>
