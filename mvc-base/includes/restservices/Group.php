<?php

class Group extends RESTClass
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
			$view = new View('newGroup');

			if(isset($data['id']))
			{
				$dataForView = GroupModel::getGroupById($data['id']);
				$user = new User();

				if($dataForView->userId = $user->id)
				{
					//ok - its your Group!

					//load old values
					$view->setData((array) $dataForView);

					$jsonResponse = new JSON();
					$jsonResponse->result = true;
					$jsonResponse->setData(array('html' => $view->parse()));
					$jsonResponse->send();
				}
				else
				{
					//its not your group!
					$jsonResponse = new JSON();
					$jsonResponse->result = false;
					$jsonResponse->setMessage('You tried to edit an Group that doesn\'t belong to you! No chance!');
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
        $requiredFields = array('name', 'since', 'owner_id', 'password');

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

			GroupModel::createNewGroup($data);

			$jsonResponse = new JSON();
			$jsonResponse->result = true;
			$jsonResponse->setMessage('Group created!');
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
        $requiredFields = array('name', 'since', 'owner_id', 'password', 'id');

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
			$groupObj = GroupModel::getGroupById($data['id']);

			if($groupObj->userId != $user->id)
			{
				$jsonResponse = new JSON();
				$jsonResponse->result = false;
				$jsonResponse->setMessage("You're not allowed to save/edit that groups!");
				$jsonResponse->send();
			}
			else
			{
				GroupModel::createNewGroup($data); //TODO: This is shit..., create a new methode

				$jsonResponse = new JSON();
				$jsonResponse->result = true;
				$jsonResponse->setMessage('Group saved!');
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
			$groupObj = GroupModel::getGroupById($data['id']);

			if($groupObj->userId != $user->id)
			{
				$jsonResponse = new JSON();
				$jsonResponse->result = false;
				$jsonResponse->setMessage("You're not allowed to delete that group!");
				$jsonResponse->send();
			}
			else
			{
				GroupModel::deleteGroup($groupObj->id);

				$jsonResponse = new JSON();
				$jsonResponse->result = true;
				$jsonResponse->setMessage('Group deleted!');
				$jsonResponse->send();
			}
		}

	}
}