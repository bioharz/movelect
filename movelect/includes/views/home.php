<?php

echo $this->header;

?>


    <!--Logo-->
    <div class="col-xs-12 brandlogo">
        <img class="col-xs-12" src="./media/BrandLogo1.png" alt="Logo"/>
    </div>
    <br>

    <!--Text Headline-->
    <div class="row headline">
        <h1 class="col-xs-12 text-center">THE MOVIE ELECTING APP
        </h1>
    </div>


    <div class="row signup">
        <div class="col-xs-4"></div>
        <form method="get" action="login">
            <button type="submit" class="col-xs-4 btn btn-default">Register</button>
        </form>
        <div class="col-xs-4"></div>
    </div>


<?php

echo $this->footer;

?>