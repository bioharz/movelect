<?php

class GroupModel
{
	public static function getGroupById($id)
	{
		$db = new Database();
		$sql = "SELECT * FROM `group` WHERE id=".intval($id);

		$result = $db->query($sql);

		if($db->numRows($result) > 0)
		{
			return $db->fetchObject($result);
		}

		return null;
	}

	public static function getGroupByUserId($userId)
	{
		$db = new Database();



		$sql = "SELECT * FROM `group`, group_has_user WHERE `group`.id = group_has_user.group_id AND group_has_user.user_id=".intval($userId);
		$result = $db->query($sql);

		if($db->numRows($result) > 0)
		{
			$groupArray = array();

			while($row = $db->fetchObject($result))
			{
				$groupArray[] = $row;
			}

			return $groupArray;
		}

		return null;
	}

	public static function createNewGroup($data)
	{
		$db = new Database();

		$sql = "INSERT INTO `group`(name, since, owner_id, password) VALUES('".$db->escapeString($data['name'])."','".intval($data[since])."','".intval($data[owner_id])."','".$db->escapeString($data['password'])."')";
		$db->query($sql);

		$data['id'] = $db->insertId();

		return (object) $data;
	}

	/*
	public static function saveGroup($data)
	{
		$db = new Database();

		$sql = "UPDATE address SET firstname='".$db->escapeString($data['firstname'])."',lastname='".$db->escapeString($data['lastname'])."',street='".$db->escapeString($data['street'])."',zip='".$db->escapeString($data['zip'])."',city='".$db->escapeString($data['city'])."' WHERE id=".intval($data['id']);
		$db->query($sql);

		return (object) $data;
	}
	*/

	public static function deleteGroup($id)
	{
		$db = new Database();

		$sql = "DELETE FROM `group` WHERE id=".intval($id);
		$db->query($sql);
	}
}