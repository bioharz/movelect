<!DOCTYPE html>
<html lang="de">
<head>

	<title><?php echo $this->title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link href="fonts/g-fonts-family-open-sans-400-600.css" rel="stylesheet"> <!--from https://fonts.googleapis.com/css?family=Open+Sans:400,600 -->
	<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<?php if($this->current == "login"): ?>
		<link href="css/toastr.min.css" rel="stylesheet">
	<?php endif; ?>

		<link href="css/main.css" rel="stylesheet">


		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<?php if($this->current == "index" || "GroupOverview"): ?>
		<script type="text/javascript" src="js/core.js"></script>
	<?php elseif($this->current == "register"): ?>
		<script type="text/javascript" src="js/register.js"></script>
	<?php elseif($this->current == "login"): ?>
		<script type="text/javascript" src="js/toastr.min.js"></script>
		<script type="text/javascript" src="js/login.js"></script>
	<?php endif; ?>

</head>
<body>
<header>




<!--
    <div class="inner">
		<div class="logo">
			<div class="name">Adressverwaltung</div>
			<div class="version">1.0</div>
		</div>
-->

		<?php if(LOGGED_IN == true): ?>




            <ul class="row nav nav-tabs navigation">
                <li role="presentation" class="active col-xs-3 text-center"><a href="#">MY GROUPS</span></a></li>
                <li role="presentation" class="col-xs-3 text-center"><a href="account.php">ACCOUNT</a></li>
                <li role="presentation" class="col-xs-3 text-center"><a href="notifications.php">NOTIFICATIONS</span></a></li>
                <li role="presentation" class="col-xs-3 text-center"><a href="search.php">SEARCH</a></li>
            </ul>
            <!--
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



			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="/" class="navbar-brand active">Gruppenverwaltung</a>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


						<ul class="nav navbar-nav navbar-right">
							<li><a href="logout">(Abmelden)</a></li>
						</ul>

						<p class="navbar-text navbar-right">Angemeldet als <strong class="username"><?php echo $this->username; ?></strong></p>

					</div>
				</div>
			</nav>


		<?php else: ?>


            <ul class="row nav nav-tabs navigation">
                <li role="presentation" class="col-xs-3 text-center <?php if($this->current == "home"): ?> active<?php endif; ?>"><a href="#">HOME</a></li>
                <li role="presentation" class="col-xs-3 text-center <?php if($this->current == "about"): ?> active<?php endif; ?>"><a href="about">ABOUT</a></li>
                <li role="presentation" class="col-xs-3 text-center <?php if($this->current == "contact"): ?> active<?php endif; ?>"><a href="contact">CONTACT</a></li>
                <li role="presentation" class="col-xs-3 text-center <?php if($this->current == "login"): ?> active<?php endif; ?>"><a href="login">LOGIN</a></li>
            </ul>










            <!--
			<nav class="mainnav">
				<ul class="nav nav-pills">
					<li<?php if($this->current == "login"): ?>class="active"<?php endif; ?>><a href="login">Login</a></li>
				</ul>
			</nav>
			-->
		<?php endif; ?>

	</div>
</header>