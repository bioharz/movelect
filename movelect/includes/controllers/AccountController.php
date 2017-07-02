<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class AccountController extends Controller
{
	protected $viewFileName = "account"; //this will be the View that gets the data...
	protected $loginRequired = true;


	public function run()
	{
		$this->view->title = "Account";
		$this->view->username = $this->user->username;

	}

}