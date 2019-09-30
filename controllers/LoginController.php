<?php

class LoginController extends Controller
{
	public function indexAction()
	{
		return $this->render('index');
	}

	public function tryAction()
	{
		if ($_POST['form']['login'] == 'admin') {
			if ($_POST['form']['password'] == 'admin') {
				session_start();
				$_SESSION['auth_token'] = 'auth';
				header('Location: /manager');
				return true;
			}
		}

		header('Location: /login?error');
	}
}
