<?php

require ROOT . '/models/Claim.php';

class ManagerController extends Controller
{
	public function indexAction()
	{
		$claims = (new Claim($this->config['db']))->find();
		return $this->render('index', ['claims' => $claims]);
	}

	public function deleteAction()
	{
		if ($this->params[0]) {
			$id = $this->params[0];

			$claims = (new Claim($this->config['db']))->delete($id);

			header('Location: /manager');
		}
	}

	public function editAction()
	{
		if ($this->params[0]) {
			$id = $this->params[0];
			$claim = new Claim($this->config['db']);
			$claim->getOne($id);

			if (isset($_POST['form'])) {
				$claim->load($_POST['form']);
				$claim->save();
			}

			return $this->render('edit', ['claim' => $claim->fields]);
		}

		header('Location: /manager');
	}

	public function beforeAction()
	{
		$auth = new Auth();

		if (!$auth->check()) {
			header('Location: /login');
		}
	}

	public function logoutAction()
	{
		session_start();
		unset($_SESSION['auth_token']);
		header('Location: /manager');
	}
}
