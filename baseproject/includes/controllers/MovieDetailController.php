<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class MovieDetailController extends Controller
{
	protected $viewFileName = "moviedetail"; //this will be the View that gets the data...
	protected $loginRequired = true;


	public function run()
	{
		$this->view->title = "Moviedetails";
		$this->view->username = $this->user->username;

        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $this->view->movies = MovieModel::getMovieById($id);
            if($this->view->movies !== null && $this->view->movies->userId != $this->user->id)
            {
                $this->view->movies = null;
            }


        }
	}

}