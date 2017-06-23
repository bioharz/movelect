<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class LoginController extends Controller
{
    protected $viewFileName = "login"; //this will be the View that gets the data...
    protected $loginRequired = false;


    public function run()
    {
        $this->view->title = 'Login';

        if ($this->user->isLoggedIn) {



            $this->user->redirectToIndex();
        }

        $this->checkForLoginPost();
        $this->checkForRegisterPost();
    }

    private function checkForLoginPost()
    {
        if (!empty($_POST) && isset($_POST['action']) && $_POST['action'] == 'login') {
            //probably a login attempt!

            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($username != "" && $password != "") {
                if ($this->user->login($username, $password)) {
                    $this->user->redirectToIndex();
                } else {
                    $this->view->errorPasswd = true;
                }
            }

        }
    }

    private function checkForRegisterPost()
    {
        if (!empty($_POST) && isset($_POST['action']) && $_POST['action'] == 'register') {
            $requiredFields = array('name', 'email', 'pwd', 'pwd2');

            $error = false;
            $errorFields = array();

            foreach ($requiredFields as $fieldName) {
                if (!isset($_POST[$fieldName]) || $_POST[$fieldName] == '') {
                    $error = true;
                    $errorFields[$fieldName] = "Bitte Wert eingeben!";
                }
            }

            if (!$error) {
                $password = $_POST['pwd'];
                $username = $_POST['name'];
                $email = $_POST['email'];

                //$since = new date('Y-m-d H:i:s');

                //$date = new Date;

                //error_log($date);

                $since = "2017-07-24 11:11:11";

                if (strlen($password) < 8) //check if password is long enough
                {
                    $error = true;
                    $errorFields['pwd'] = "Passwort ist zu kurz! Bitte mindestens 8 Zeichen eingeben";
                } else if ($password != $_POST['pwd2']) //check if password matches password repetition
                {
                    $error = true;
                    $errorFields['pwd2'] = "Passwort Wiederholung entspricht nicht dem gleichen Wert von Passwort!";
                }

                //if(!$error && Utils::isValidEmail($email));
                if(false)
                {
                    $error = true;
                    $errorFields['email'] = "Email Adresse ist ungültig!";
                }


                if (!$error) {
                    $userExist = User::existsWithUsername($username);
                    $emailExist = User::existsWithUsername($username);
                    //check if username exists already...
                    if (!$userExist && !$emailExist) {
                        User::createUser(array('name' => $username, 'pass' => $password, 'email' => $email, 'since' => $since));

                        $jsonResponse = new JSON();
                        $jsonResponse->result = true;
                        $jsonResponse->setMessage("Benutzer wurde erfolgreich hinzugefügt!");
                        $jsonResponse->send();
                    } else if (!$userExist)
                    {
                        $errorFields['name'] = "Benutzername ist schon vorhanden!";

                        $jsonResponse = new JSON();
                        $jsonResponse->result = false;
                        $jsonResponse->setData(array('errorFields' => $errorFields));
                        $jsonResponse->send();
                    } else if (!$emailExist) {
                        $errorFields['name'] = "Email Adresse ist schon vorhanden!";

                        $jsonResponse = new JSON();
                        $jsonResponse->result = false;
                        $jsonResponse->setData(array('errorFields' => $errorFields));
                        $jsonResponse->send();
                    } else {
                        $errorFields['name'] = "Benutzername/Email Adresse ist schon vorhanden!";

                        $jsonResponse = new JSON();
                        $jsonResponse->result = false;
                        $jsonResponse->setData(array('errorFields' => $errorFields));
                        $jsonResponse->send();
                    }

                }
            }

            $jsonResponse = new JSON();
            $jsonResponse->result = false;
            $jsonResponse->setData(array('errorFields' => $errorFields));
            $jsonResponse->send();
        }
    }
}