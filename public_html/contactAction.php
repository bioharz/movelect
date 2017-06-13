<?php
// lets just people visit the site oer the submit button

if(!isset($_POST["submit"])){
    exit;
}

//pulls the inputs from contact.html, checks if there are injections
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

//sends mail to the submitter, that the contact was successfull
$confirm = "Thanks for contacting us! We will answer you soon!";
mail($email, "We recieved your Contact request!", $confirm);

//sends the contact mail to us.
$contactrequest = "We got a new contact request! /n Date of request: ".date("d.m.Y")." at ".date("h,m,s")." /n Name: ".$name."/n E-Mail: ".$email."/n Message: /n /n'".$message."'";
mail("chr.goerner@gmail.com","new contact@movelect",$contactrequest);

echo "Thank you for contacting us! We will answer you soon.";