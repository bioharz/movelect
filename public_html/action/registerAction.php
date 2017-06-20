<?php
session_start();
$pdo = new PDO('mysql:host=movelect.com;dbname=movelect', 'movelect', 'K;G8;nSCKz\fljZV');

if(!isset($_POST["submit"])){
    exit;
}

//pulls the inputs from register.html, checks if there are injections
$name = addslashes(htmlspecialchars($_POST["user"]));
$email = addslashes(htmlspecialchars($_POST["email"]));
$password = addslashes(htmlspecialchars($_POST["password"]));
$password2 = addslashes(htmlspecialchars($_POST["password2"]));
$error = false;
//checks, if a field is empty
if(($name == "") OR ($email == "") OR ($password == "") OR ($password2 = "")){
    echo "You forgot to tell us something!";
    $error = true;
}

//checks e-mail pattern
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Use a valid E-Mail please!";
    $error = true;
}

//checks, if password inputs are the same
if($password != $password2){
    echo "Password 1 and password 2 are not the same!";
    $error = true;
}

//checks, if the e-mail is already in use
if(!$error){
$statement = $pdo->prepare("SELECT * FROM mydb.user WHERE user.email = .$email");
$result = $statement->execute(array("email"=> $email));
$res = $statement->fetch();
if($res !== false){
    echo "The E-mail is already in use!";
    $error = true;
}
}

//checks, if the username is already in use
if(!$error){
$statement2 = $pdo->prepare("SELECT * FROM mydb.user WHERE user.name = .$name");
$result2 = $statement2->execute(array("name"=> $name));
$res2 = $statement2->fetch();
if($res2 !== false){
    echo"the username is already in use!";
    $error = true;
}
}
//some form stuff
$headers =  'MIME-Version: 1.0' . "\r\n";
$headers .= 'From: Movelect <contactmovelect@gmail.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

//register logic
if(!$error){
$password_hash = password_hash($password, PASSWORD_DEFAULT);
$statement3 = $pdo->prepare("INSERT INTO users (name, email, pass) VALUES (:name, :email, :pass)");
$result3 = $statement3->execute(array('name'=> $name, 'email'=> $email, 'pass'=> $password_hash));

if($result3){
    echo "You successfully registered! <a href=../Login.html>MovElect Now!</a>";
    //sends mail to the submitter, that the registration was successfull
    $confirm = "<h1>Nice to meet you!</h1> \n You sucessfully registered on <link href='https://www.movelect.com'>movelect.com</link>!\n Username: $name \n E-Mail: $email ,\n\n Kind regards, \n\n Team movelect ";
    mail($email, "Registration@Movelect", $confirm ,$headers );

}else{
    echo "oh! something went wrong!";
    $error = true;
}
}
if($error){
    exit;
}

?>

