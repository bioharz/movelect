<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class NotificationController extends Controller
{
	protected $viewFileName = "notification"; //this will be the View that gets the data...
	protected $loginRequired = true;


	public function run()
	{
		$this->view->title = "Notification";
		$this->view->username = $this->user->username;


	}

}