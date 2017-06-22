<?php

echo $this->header;

?>

<br>
<br>
<!--Text-->
<div class="row headline">
    <h1 class="col-xs-12 text-center">Contact Us!</h1>
</div>
<br>
<br>
<form class="form-horizontal" action="action/contactAction.php" method="post">
    <!-- input field name-->
    <div class="row form-group">
        <div class="col-xs-3"></div>
        <!-- keine Labels<label for="inputEmail3" class="col-sm-2 control-label">Email</label>-->
        <div class="col-xs-6">
            <input type="text" class="form-control text-center" id="inputUser3" name="name" placeholder="Name">
        </div>
        <div class="col-xs-3"></div>
    </div>
    <!-- input field email -->
    <div class="row form-group">
        <div class="col-xs-3"></div>
        <!-- keine Labels<label for="inputEmail3" class="col-sm-2 control-label">Email</label>-->
        <div class="col-xs-6">
            <input type="email" class="form-control text-center" id="inputEmail3" name="email" placeholder="Email">
        </div>
        <div class="col-xs-3"></div>
    </div>
    <!-- input field message -->
    <div class="row form-group">
        <div class="col-xs-3"></div>
        <!-- keine Labels<label for="inputEmail3" class="col-sm-2 control-label">Email</label>-->
        <div class="col-xs-6">
            <input type="message" class="form-control text-center" id="inputPassword3" name="message" placeholder="Your message">
        </div>
        <div class="col-xs-3"></div>
    </div>

    <div class="row form-group">
        <div class="col-xs-4"></div>
        <input class="col-xs-4 btn btn-default" type="submit" name="submit"></input>
        <div class="col-xs-4"></div>
    </div>
</form>
<br>
<br>




<?php

echo $this->footer;

?>
