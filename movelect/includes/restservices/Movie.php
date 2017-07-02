<?php

class Movie extends RESTClass
{
	private $Database = null;

	public function __construct()
	{
		$this->Database = new Database();
	}

	public function __destruct()
	{
		$this->Database = null;
	}

	protected function getRequest($data)
	{
		if(isset($data['returnView']) && $data['returnView'])
		{

            if(isset($data['detail']) && $data['detail'])
            {
                $view = new View('Movie-Detail');

            }else {
                $view = new View('Movie');

            }


			if(isset($data['id']))
			{
				$dataForView = MovieModel::getMovieById($data['id']);
				$user = new User();

				if($dataForView->userId = $user->id)
				{
					//ok - its your movie!

					//load old values
					$view->setData((array) $dataForView);

					$jsonResponse = new JSON();
					$jsonResponse->result = true;
					$jsonResponse->setData(array('html' => $view->parse()));
					$jsonResponse->send();
				}
				else
				{
					//its not your movie!
					$jsonResponse = new JSON();
					$jsonResponse->result = false;
					$jsonResponse->setMessage('You tried to edit an movie that doesn\'t belong to you! No chance!');
					$jsonResponse->send();
				}
			}
			else
			{
				//new
				$jsonResponse = new JSON();
				$jsonResponse->result = true;
				$jsonResponse->setData(array('html' => $view->parse()));
				$jsonResponse->send();
			}
		}
	}

	protected function createRequest($data)
	{
		$requiredFields = array('movie_name', 'director', 'year', 'imdb_id', 'image_path');

		$error = false;
		$errorFields = array();
		$user = new User();

		foreach($requiredFields as $fieldname)
		{
			if(!isset($data[$fieldname]) || $data[$fieldname] == "")
			{
				$error = true;
				$errorFields[$fieldname] = 'Bitte geben Sie einen Wert ein!';
			}
		}

		if(!$error)
		{
			$data['userId'] = $user->id;

			MovieModel::createNewMovie($data);

			$jsonResponse = new JSON();
			$jsonResponse->result = true;
			$jsonResponse->setMessage('Movie created!');
			$jsonResponse->send();
		}
		else
		{
			$jsonResponse = new JSON();
			$jsonResponse->result = false;
			$jsonResponse->setData(array('errorFields' => $errorFields));
			$jsonResponse->send();
		}

	}

	protected function saveRequest($data)
	{
		$requiredFields = array('movie_name', 'director', 'year', 'imdb_id', 'image_path', 'id');

		$error = false;
		$errorFields = array();
		$user = new User();

		foreach($requiredFields as $fieldname)
		{
			if(!isset($data[$fieldname]) || $data[$fieldname] == "")
			{
				$error = true;
				$errorFields[$fieldname] = 'Bitte geben Sie einen Wert ein!';
			}
		}

		if(!$error)
		{
			$movieObj = MovieModel::getMovieById($data['id']);

			if($movieObj->userId != $user->id)
			{
				$jsonResponse = new JSON();
				$jsonResponse->result = false;
				$jsonResponse->setMessage("You're not allowed to save/edit that movie!");
				$jsonResponse->send();
			}
			else
			{
				MovieModel::saveMovie($data);

				$jsonResponse = new JSON();
				$jsonResponse->result = true;
				$jsonResponse->setMessage('Movie saved!');
				$jsonResponse->send();
			}

		}
		else
		{
			$jsonResponse = new JSON();
			$jsonResponse->result = false;
			$jsonResponse->setData(array('errorFields' => $errorFields));
			$jsonResponse->send();
		}
	}

	protected function deleteRequest($data)
	{
		$user = new User();

		if(!isset($data['id']))
		{
			$jsonResponse = new JSON();
			$jsonResponse->result = false;
			$jsonResponse->setMessage("Can't delete - id is missing!");
			$jsonResponse->send();
		}
		else
		{
			$movieObj = MovieModel::getMovieById($data['id']);

			if($movieObj->userId != $user->id)
			{
				$jsonResponse = new JSON();
				$jsonResponse->result = false;
				$jsonResponse->setMessage("You're not allowed to delete that movie!");
				$jsonResponse->send();
			}
			else
			{
				MovieModel::deleteMovie($movieObj->id);

				$jsonResponse = new JSON();
				$jsonResponse->result = true;
				$jsonResponse->setMessage('Movie deleted!');
				$jsonResponse->send();
			}
		}

	}
}