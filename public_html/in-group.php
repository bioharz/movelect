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
    <title>My Group</title>
    <!--Grund Implementierung von Bootstrap und Anlegen des Stylesheets-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<!--Navigation Backend-->
<ul class="row nav nav-tabs navigation">
    <li role="presentation" class="col-xs-3 text-center"><a href="home-logged-in.php">MY GROUPS</span></a></li>
    <li role="presentation" class="col-xs-3 text-center"><a href="account.php">ACCOUNT</a></li>
    <li role="presentation" class="col-xs-3 text-center"><a href="notifications.php">NOTIFICATIONS</span></a></li>
    <li role="presentation" class="col-xs-3 text-center"><a href="search.php">SEARCH</a></li>
</ul>
<br>
<br>
<!--Text Headline-->
<div class="row headline">
    <h1 class="col-xs-12 text-center">Group 1</h1>
</div>
<br>
<br>
<!--Group dates-->
<div class="row groupDates">
    <div class="col-xs-3"></div>
    <div class="col-xs-3">
        <ul class="list-group date">
            <li class="list-group-item text-center"><h2>Date1</h2></li>
            <li class="list-group-item text-center">24.05.17 18:00</li>
            <li class="list-group-item text-center">time left: 23.59h</li>
            <li class="list-group-item text-center">3 suggestions</li>
            <li class="list-group-item text-center">2 votes</li>
        </ul>
    </div>
    <div class="col-xs-3">
        <ul class="list-group date">
            <li class="list-group-item text-center"><h2>Date2</h2></li>
            <li class="list-group-item text-center">07.06.17 20:00</li>
            <li class="list-group-item text-center">time left: 15.22h</li>
            <li class="list-group-item text-center">4 suggestions</li>
            <li class="list-group-item text-center">3 votes</li>
        </ul>
    </div>
    <div class="col-xs-3"></div>
</div>

</body>
</html>