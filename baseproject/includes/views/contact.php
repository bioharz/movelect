<?php

echo $this->header;

?>
    <div id="main">

    <!--Text-->
    <div class="row">
        <h1 class="col-xs-12">Kontakt zu Team movelect</h1>

    <form class="form-horizontal col-xs-12" action="contact" method="post">
        <?php if($this->errorNothing == true): ?>
                    <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4>Alle Angaben sind Pflichtfelder!</h4>
                    <p>Prüfen Sie bitte ob Sie nicht etwas vergessen haben und versuchen Sie es erneut!</p>
                </div>
        <?php endif; ?>
        <?php if($this->errorEmail == true): ?>
            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4>E-Mail Syntax Error!</h4>
                <p>Bitte geben Sie eine valide E-Mail adresse ein!</p>
            </div>
        <?php endif; ?>
        <?php if($this->noError == true): ?>
            <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4>Kontaktversuch geglückt!</h4>
                <p>Das movelect.com team wird sich so schnell wie möglich um ihr Anliegen kümmern!</p>
            </div>
        <?php endif; ?>
        <div class="form-group">
            <label for="name" class="col-xs-12 col-md-2">Name</label>
            <div class="col-xs-12 col-md-10">
                <input type="text" name="name" id="name" class="text form-control" value="" placeholder="Name">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-xs-12 col-md-2">E-Mail</label>
            <div class="col-xs-12 col-md-10">
                <input type="email" name="email" id="email" class="text form-control" value="" placeholder="E-Mail">
            </div>
        </div>
        <div class="form-group">
            <label for="nachricht" class="col-xs-12 col-md-2">Nachricht</label>
            <div class="col-xs-12 col-md-10">
                <input type="message" name="message" id="message" class="text form-control" value="" placeholder="Nachricht">
            </div>
        </div>
        <button type="submit" class="btn btn-default">Absenden</button>
        <input type="hidden" name="submit" value="submit">
    </form>
    </div>
    <br>
    <br>


<?php

echo $this->footer;

?>