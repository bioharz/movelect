<?php
session_start();
if(!isset($_SESSION['username'])) {
    die('Please <a href="Login.html">Log In</a> or <a href="register.html">register</a> first!');
}
//shows, who is logged in
$usrnm = $_SESSION['username'];
echo "Welcome ".$usrnm;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Voting</title>
    <!--Grund Implementierung von Bootstrap und Anlegen des Stylesheets-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<!--Navigation Backend-->
<ul class="row nav nav-tabs navigation">
    <li role="presentation" class="col-xs-3 text-center"><a href="home-logged-in.php"><span class="glyphicon glyphicon-expand" aria-hidden="true"></span></a></li>
    <li role="presentation" class="col-xs-3 text-center"><a href="account.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
    <li role="presentation" class="col-xs-3 text-center"><a href="notifications.php"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span></a></li>
    <li role="presentation" class="col-xs-3 text-center"><a href="search.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></li>
</ul>
<br>
<br>
<!--Text Headline-->
<div class="row headline">
    <h1 class="col-xs-12 text-center">Voting</h1>
</div>
<br>
<br>
<!--Voting-->
<div class="row voting">
    <div class="col-xs-4"></div>
    <div class="col-xs-4">
        <ul class="list-group date">
            <li class="list-group-item text-center">movie 1</li>
            <li class="list-group-item text-center">movie 2</li>
            <li class="list-group-item text-center">movie 3</li>
            <li class="list-group-item text-center">movie 4</li>
        </ul>
    </div>
    <div class="col-xs-4"></div>
</div>


</body>
</html>