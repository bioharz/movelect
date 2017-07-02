<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class ContactController extends Controller
{
    protected $viewFileName = "contact"; //this will be the View that gets the data...
    protected $loginRequired = false;


    public function run()
    {
        $this->view->title = "Contact";
        $this->checkForContactPost();
    }


    private function checkForContactPost()
    {

        if(!empty($_POST) && isset($_POST['submit']) && $_POST['submit'] == 'submit')
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];





            if($name == "" || $email == "" || $message =="")
            {

                    $this->view->errorNothing = true;


            }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $this->view->errorEmail = true;

            }else{
                //some form stuff
                $headers = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'From: Movelect <contactmovelect@gmail.com>' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                //sends mail to the submitter, that the contact was successfull
                $confirm = "Thanks for contacting us! We will answer you soon! \n\n\n - Team movelect";
                mail($email, "We recieved your Contact request!", $confirm, $headers);

                //sends the contact mail to us.
                $contactrequest = "We got a new contact request! \n Date of request: " . date("d.m.Y") . " at " . date("h,m,s") . " \n Name: " . $name . "\n E-Mail: " . $email . "\n Message: \n \n'" . $message . "'";
                mail("contactmovelect@gmail.com", "new contact at movelect", $contactrequest, $headers);
                $this->view->noError = true;
            }

        } }
}
?>
