<?php

require ROOT . '/models/Claim.php';

class PageController extends Controller
{
	public function indexAction()
	{
		echo $this->render('index');
	}

	public function saveAction()
	{
		$claim = new Claim($this->config['db']);
		$claim->load($_POST['form']);
		$claim->save();

		header("Location: /page/success");
	}

	public function successAction()
	{
		echo $this->render('success');
	}
}
