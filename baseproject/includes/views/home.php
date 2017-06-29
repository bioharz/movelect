<?php

echo $this->header;

?>


    <!--Logo-->
    <div class="col-xs-12 brandlogo">
        <img class="col-xs-12" src="./media/BrandLogo1.png" alt="Logo"/>
    </div>
    <br>

    <div id="main">
        <div class="row">
            <h1 class="col-xs-12">Willkommen auf movelect.com</h1>
            <p class="col-xs-12">Der app für die schnelle Filmentscheidung</p>
            <form method="get" action="login">
                <button class="btn btn-default" type="submit">Zum Login</button>
            </form>
        </div>
    </div>


<?php

echo $this->footer;

?>