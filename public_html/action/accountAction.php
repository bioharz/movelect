<?php
session_start();
$pdo = new PDO('mysql:host=movelect.com;dbname=movelect', 'movelect', 'K;G8;nSCKz\fljZV');

if(!isset($_POST["submit"])){
    exit;
}
//pulls the inputs from account.php, checks if there are injections
$curremail = addslashes(htmlspecialchars($_POST["curremail"]));
$nemail = addslashes(htmlspecialchars($_POST["nemail"]));
$nemail2 = addslashes(htmlspecialchars($_POST["nemail2"]));
$pwemail = addslashes(htmlspecialchars($_POST["pwemail"]));
$currpassword = addslashes(htmlspecialchars($_POST["currpassword"]));
$npassword = addslashes(htmlspecialchars($_POST["npassword"]));
$npassword2 = addslashes(htmlspecialchars($_POST["npassword2"]));

//some form stuff
$headers =  'MIME-Version: 1.0' . "\r\n";
$headers .= 'From: Movelect <contactmovelect@gmail.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

//checks, what the user wants to change
if((!$curremail==="")AND(!$nemail==="")AND(!$nemail2==="")){
    //checks if current e-mail matches to the mail in our db
    $statement = $pdo->prepare("SELECT * FROM mydb.user WHERE user.email = .$curremail");
    $result = $statement->execute(array("email"=> $curremail));
    $res = $statement->fetch();
    if($res == false){
        echo "Your current email doesn't match";
        exit;
    }
    //checks e-mail pattern
    if(!filter_var($nemail, FILTER_VALIDATE_EMAIL)){
        echo "Use a valid E-Mail please!";
        exit;
    }
    //checks, if inputs are the same
    if($nemail != $nemail2){
        echo "The repetition of your new email didn't match!";
        exit;
    }
    //executes changes
    $statement = $pdo->prepare("UPDATE mydb.user SET email = .$nemail WHERE email = .$curremail");
    $statement->execute();
    echo $statement->rowCount()."E-Mail updated successfully";
//Confirmation e-mail to the old and new adress
    $message1 = "You sucessfully changed your E-Mail adress on <link href='https://www.movelect.com'>movelect.com</link>!\n If you didn't do this, please contact us via contactmovelect@gmail.com\n\n Kind regards, \n\n Team movelect ";
    $message2 = "You sucessfully changed your E-Mail adress on <link href='https://www.movelect.com'>movelect.com</link>!\n Your new registered Adress is: $nemail \n If you didn't do this, please contact us via contactmovelect@gmail.com\n\n Kind regards, \n\n Team movelect ";
    mail($nemail, "E-Mail update successfull", $message1 ,$headers );
    mail($curremail, "E-Mail update successfull", $message2 ,$headers );

}elseif((!$pwemail==="")AND(!$currpassword==="")AND(!$npassword==="")AND(!$npassword2==="")) {
    $confirm = false;
//checks if current password matches to the password in our db
    $statement = $pdo->prepare("SELECT * FROM mydb.user WHERE user.email = .$pwemail");
    $result = $statement->execute(array('email' => $pwemail));
    $user = $statement->fetch();
//checks current password
    if ($user !== false && password_verify($currpassword, $user['pass'])) {
        $confirm = true;
    } else {
        echo "Invalid current E-Mail or Password!";
        exit;
    }
    //checks, if inputs are the same
    if ($npassword != $npassword2) {
        echo "The repetition of your new passwort didn't match!";
        exit;
    }
    //executes changes
    $password_hash = password_hash($npassword, PASSWORD_DEFAULT);
    $statement = $pdo->prepare("UPDATE mydb.user SET pass = .$password_hash WHERE email = .$curremail");
    $statement->execute();
    echo $statement->rowCount() . "Password updated successfully";
//Confirmation e-mail
    $message3 = "You sucessfully changed your Password on <link href='https://www.movelect.com'>movelect.com</link>!\n If you didn't do this, please contact us via contactmovelect@gmail.com\n\n Kind regards, \n\n Team movelect ";
    mail($pwemail, "E-Mail update successfull", $message3 ,$headers );

}else{
    die('You forgot to tell us something. Go <a href="account.php">back</a> ');
}
