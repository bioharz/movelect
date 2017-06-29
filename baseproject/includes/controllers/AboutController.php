<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class AboutController extends Controller
{
    protected $viewFileName = "about"; //this will be the View that gets the data...
    protected $loginRequired = false;


    public function run()
    {
        $this->view->title = "About";

    }
}