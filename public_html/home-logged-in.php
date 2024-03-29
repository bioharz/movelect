<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Groups</title>

    <!--Grund Implementierung von Bootstrap und Anlegen des Stylesheets-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<!--Navigation Backend-->
<ul class="row nav nav-tabs navigation">
    <li role="presentation" class="active col-xs-3 text-center"><a href="#">MY GROUPS</span></a></li>
    <li role="presentation" class="col-xs-3 text-center"><a href="account.php">ACCOUNT</a></li>
    <li role="presentation" class="col-xs-3 text-center"><a href="notifications.php">NOTIFICATIONS</span></a></li>
    <li role="presentation" class="col-xs-3 text-center"><a href="search.php">SEARCH</a></li>
</ul>
<!-- Navigation V.2 vorerst verworfen
<ul class="nav nav-tabs navigation">
    <li role="presentation" class="active"><a href="#">
        <button type="button" class="btn btn-default" aria-label="Left Align">
            <span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
        </button>
    </a></li>
    <li role="presentation"><a href="#">
        <button type="button" class="btn btn-default" aria-label="Left Align">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
        </button>
    </a></li>
    <li role="presentation"><a href="#">
        <button type="button" class="btn btn-default" aria-label="Left Align">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        </button>
    </a></li>
    <li role="presentation"><a href="#">
        <button type="button" class="btn btn-default" aria-label="Left Align">
            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
        </button>
    </a></li>
</ul>
-->
<br>
<br>
<!--Text Headline-->
<div class="row headline">
    <h1 class="col-xs-12 text-center">My Groups</h1>
</div>
<!--Group List-->
<div class="row groupList">
<div class="col-xs-4"></div>
<div class="col-xs-4">
    <ul class="list-group">
    <li class="list-group-item text-center">GROUP 1</li>
    <li class="list-group-item text-center">GROUP 2</li>
    <li class="list-group-item text-center">GROUP 3</li>
    <li class="list-group-item text-center">GROUP 4</li>
    <li class="list-group-item text-center">GROUP 5</li>
    </ul>
</div>
<div class="col-xs-4"></div>
</div>
<br>
<!--New Group Button-->
<div class="row">
    <div class="col-xs-4"></div>
    <button type="submit" class="col-xs-4 btn btn-default text-center">NEW GROUP</button>
    <div class="col-xs-4"></div>
</div>
</body>
</html>