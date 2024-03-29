<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Account</title>

    <!--Grund Implementierung von Bootstrap und Anlegen des Stylesheets-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<!--Navigation Backend-->
<ul class="row nav nav-tabs navigation">
    <li role="presentation" class="col-xs-3 text-center"><a href="home-logged-in.php">MY GROUPS</a></li>
    <li role="presentation" class="active col-xs-3 text-center"><a href="#">ACCOUNT</a></li>
    <li role="presentation" class="col-xs-3 text-center"><a href="notifications.php">NOTIFICATIONS</a></li>
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
    <h1 class="col-xs-12 text-center">My Account</h1>
</div>
<br>
<!--LogOut Button-->
<form class="form-horizontal" action="action/logoutAction.php">
<div class="row">
    <div class="col-xs-4"></div>
    <button type="submit" style="color: red;" class="col-xs-4 btn btn-default text-center">LogOut</button>
    <div class="col-xs-4"></div>
</div>
</form>
<form class="form-horizontal" action="action/accountAction.php">
    <div class="row headline">
        <h1 class="col-xs-12 text-center">
            Change stuff:<br><br><small>Change E-Mail:<br></small>
        </h1>
    </div>

    <!-- input fields email-->
    <div class="row form-group">
        <div class="col-xs-3"></div>
        <!-- keine Labels<label for="inputEmail3" class="col-sm-2 control-label">Email</label>-->
        <div class="col-xs-6">
            <input type="email" class="form-control text-center" id="inputUser3" name="curremail" placeholder="Tell us your current E-Mail">
        </div>
        <div class="col-xs-3"></div>
    </div>
    <div class="row form-group">
        <div class="col-xs-3"></div>
        <!-- keine Labels<label for="inputEmail3" class="col-sm-2 control-label">Email</label>-->
        <div class="col-xs-6">
            <input type="email" class="form-control text-center" id="inputUser3" name="nemail" placeholder="Tell us your new E-Mail">
        </div>
        <div class="col-xs-3"></div>
    </div>
    <div class="row form-group">
        <div class="col-xs-3"></div>
        <!-- keine Labels<label for="inputEmail3" class="col-sm-2 control-label">Email</label>-->
        <div class="col-xs-6">
            <input type="email" class="form-control text-center" id="inputUser3" name="nemail2" placeholder="Repeat your new E-Mail"><br>
        </div>
        <div class="col-xs-3"></div>
    </div>
    <!-- input fielsd password-->

        <div class="row headline">
            <h1 class="col-xs-12 text-center">
                <small>Change Password:<br></small>
            </h1>
        </div>
    <div class="row form-group">
        <div class="col-xs-3"></div>
        <!-- keine Labels<label for="inputEmail3" class="col-sm-2 control-label">Email</label>-->
        <div class="col-xs-6">
            <input type="email" class="form-control text-center" id="inputUser3" name="pwemail" placeholder="Tell us your current E-Mail">
        </div>
        <div class="col-xs-3"></div>
    </div>
        <div class="row form-group">
            <div class="col-xs-3"></div>
            <!-- keine Labels<label for="inputEmail3" class="col-sm-2 control-label">Email</label>-->
            <div class="col-xs-6">
                <input type="text" class="form-control text-center" id="inputUser3" name="currpassword" placeholder="Tell us your current password">
            </div>
            <div class="col-xs-3"></div>
        </div>
        <div class="row form-group">
            <div class="col-xs-3"></div>
            <!-- keine Labels<label for="inputEmail3" class="col-sm-2 control-label">Email</label>-->
            <div class="col-xs-6">
                <input type="text" class="form-control text-center" id="inputUser3" name="npassword" placeholder="Tell us your new password">
            </div>
            <div class="col-xs-3"></div>
        </div>
        <div class="row form-group">
            <div class="col-xs-3"></div>
            <!-- keine Labels<label for="inputEmail3" class="col-sm-2 control-label">Email</label>-->
            <div class="col-xs-6">
                <input type="text" class="form-control text-center" id="inputUser3" name="npassword2" placeholder="Repeat your new password">
            </div>
            <div class="col-xs-3"></div>
        </div>
    <div class="row form-group">
        <div class="col-xs-4"></div>
        <button class="col-xs-4 btn btn-default" name="submit" type="submit">Submit</button>
        <div class="col-xs-4"></div>
    </div>
</form>
</body>
</html>