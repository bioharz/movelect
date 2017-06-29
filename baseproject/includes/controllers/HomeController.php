<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class HomeController extends Controller
{
    protected $viewFileName = "home"; //this will be the View that gets the data...
    protected $loginRequired = false;


    public function run()
    {
        $this->view->title = 'Home';
    }


}