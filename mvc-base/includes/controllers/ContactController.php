<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class ContactController extends Controller
{
	protected $viewFileName = "Contact"; //this will be the View that gets the data...
	protected $loginRequired = false;


	public function run()
	{
		$this->view->title = 'Contact';

	}


}