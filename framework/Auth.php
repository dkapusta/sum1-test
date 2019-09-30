<?php

class Auth
{
	public function check()
	{
		session_start();

		if($_SESSION["auth_token"])
		{
			return true;
		}

		return false;
	}
}
