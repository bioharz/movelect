<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class GroupOverviewController extends Controller
{
	protected $viewFileName = "GroupOverview"; //this will be the View that gets the data...
	protected $loginRequired = true;


	public function run()
	{
		$this->view->title = "GroupOverview";
		$this->view->username = $this->user->username;

		$this->view->group = GroupModel::getGroupByUserId($this->user->id);
	}

}