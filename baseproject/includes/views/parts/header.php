<!DOCTYPE html>
<html lang="de">
<head>
    <title><?php echo $this->title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <link href="fonts/g-fonts-family-open-sans-400-600.css" rel="stylesheet">
    <!--from https://fonts.googleapis.com/css?family=Open+Sans:400,600 -->
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!--from https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <?php if ($this->current == "login"): ?>
        <link href="css/toastr.min.css" rel="stylesheet">
    <?php endif; ?>

    <link href="css/main.css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <?php if ($this->current == "index"): ?>
        <script type="text/javascript" src="js/core.js"></script>
    <?php elseif ($this->current == "register"): ?>
        <script type="text/javascript" src="js/register.js"></script>
    <?php elseif ($this->current == "login"): ?>
        <script type="text/javascript" src="js/toastr.min.js"></script>
        <script type="text/javascript" src="js/login.js"></script>
    <?php endif; ?>

</head>
<body>
<header>


    <?php if (LOGGED_IN == true): ?>
        <ul class="row nav nav-tabs navigation">
            <li role="presentation"
                class="col-xs-3 text-center <?php if ($this->current == "index"): ?> active<?php endif; ?>"><a
                        href="index">MY GROUPS</span></a></li>
            <li role="presentation"
                class="col-xs-3 text-center <?php if ($this->current == "account"): ?> active<?php endif; ?>"><a
                        href="account">ACCOUNT</a></li>
            <li role="presentation"
                class="col-xs-3 text-center <?php if ($this->current == "notification"): ?> active<?php endif; ?>"><a
                        href="notification">NOTIFICATIONS</span></a></li>
            <li role="presentation"
                class="col-xs-3 text-center"><a
                        href="logout">LOGOUT</a></li>


        </ul>
    <?php else: ?>
        <ul class="row nav nav-tabs navigation">
            <li role="presentation"
                class="col-xs-3 text-center <?php if ($this->current == "home"): ?> active<?php endif; ?>"><a href="#">HOME</a>
            </li>
            <li role="presentation"
                class="col-xs-3 text-center <?php if ($this->current == "about"): ?> active<?php endif; ?>"><a
                        href="about">ABOUT</a></li>
            <li role="presentation"
                class="col-xs-3 text-center <?php if ($this->current == "contact"): ?> active<?php endif; ?>"><a
                        href="contact">CONTACT</a></li>
            <li role="presentation"
                class="col-xs-3 text-center <?php if ($this->current == "login"): ?> active<?php endif; ?>"><a
                        href="login">LOGIN</a></li>
        </ul>


    <?php endif; ?>

    </div>
</header>