<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class IndexController extends Controller
{
	protected $viewFileName = "index"; //this will be the View that gets the data...
	protected $loginRequired = true;


	public function run()
	{
		$this->view->title = "Übersicht";
		$this->view->username = $this->user->username;

		$this->view->movies = MovieModel::getMoviesByUserId($this->user->id);
	}

}