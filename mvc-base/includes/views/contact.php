<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>

    <!--Grund Implementierung von Bootstrap und Anlegen des Stylesheets-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <script type="text/javascript" src="js/bootstrap.min.js"></script>


</head>
<body>
<!--Version 1 Navigation -->
<ul class="nav nav-tabs navigation">
    <li role="presentation"><a href="index.html">HOME</a></li>
    <li role="presentation"><a href='about.html'>ABOUT</a></li>
    <li role="presentation" class ="active"><a href="#">CONTACT</a></li>
    <li role="presentation"><a href="Login.html">LOGIN</a></li>
</ul>

<!--Version 2 Navigation:
<div class="row navigation">
        <button type="button" class="col-xs-3 btn btn-default btn-lg" href="#" role="button">HOME</button>
        <button type="button" class="col-xs-3 btn btn-default btn-lg" href="#" role="button">ABOUT</button>
        <button type="button" class="col-xs-3 btn btn-default btn-lg" href="#" role="button">CONTACT</button>
        <button type="button" class="col-xs-3 btn btn-default btn-lg" href="#" role="button">LOGIN</button>
    </div>
-->
<br>
<br>
<br>
<br>
<!--Text-->
<div class="column newsline">
    <h2 class="col-xs-8">Work in Progress</h2>
    <div class="col-xs-8">
        <form action="contact-action.php" method="post">
            Name: <input type="text" name="name"><br>
            E-Mail: <input type="text" name="email"><br>
            Message: <input type="message" style="width:100%;" name="message"><br>
            <input type="submit" name="submit" value="submit">
        </form>
    </div>
</div>
<br>
</body>
</html>