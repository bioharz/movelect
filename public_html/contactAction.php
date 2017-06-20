<?php
// lets just people visit the site oer the submit button

if(!isset($_POST["submit"])){
    exit;
}

//pulls the inputs from contact.php, checks if there are injections
$name = addslashes(htmlspecialchars($_POST["name"]));
$email = addslashes(htmlspecialchars($_POST["email"]));
$message = addslashes(htmlspecialchars($_POST["message"]));

//checks, if a field is empty
if(($name == "") OR ($email == "") OR ($message == "")){
    echo "You forgot to tell us something!";
    exit;
}

//checks e-mail pattern
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Use a valid E-Mail please!";
    exit;
}
//some form stuff
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From:'.$name.'<'.$email.'>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

//sends mail to the submitter, that the contact was successfull
$confirm = "Thanks for contacting us! We will answer you soon!";
mail($email, "We recieved your Contact request!", $confirm ,$headers );



//sends the contact mail to us.
$contactrequest = "We got a new contact request! /n Date of request: ".date("d.m.Y")." at ".date("h,m,s")." /n Name: ".$name."/n E-Mail: ".$email."/n Message: /n /n'".$message."'";
mail("chr.goerner@gmail.com","new contact at movelect",$contactrequest, $headers);

echo "Thank you for contacting us! We will answer you soon.";