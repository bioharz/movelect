<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Date</title>

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
    <h1 class="col-xs-12 text-center">Date 1 - add movie</h1>
</div>
<br>
<br>
<!--Date-->
<div class="row date">
    <div class="col-xs-4"></div>
    <div class="col-xs-4">
        <ul class="list-group date">
            <li class="list-group-item text-center"><input type="addMovie" class="form-control text-center" id="inputMovie" placeholder="add movie"></li>
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