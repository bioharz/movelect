<?php

echo $this->header;

?>

<div class="hintergrund">
    <img class="col-xs-12" src="./media/background_dash.jpg" alt="" title=""/>
</div>
    <br>
    <br>
    <br>
    <br>
    <br>
<div class="inhalt">
<div id="main">
    <div class="row">

        <?php if($this->movies): ?>
        <table class="table table-striped tabhintergrund">
            <thead">
                <tr>
                    <th>Id</th>
                    <th>Titel</th>
                    <th>Direktor</th>
                    <th>Jahr</th>
                    <th>Details</th>
                    <th>Bearbeiten</th>
                    <th>Löschen</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($this->movies as $movie): ?>
                <tr>
                    <td><?php echo $movie->id; ?></td>
                    <td><?php echo $movie->movie_name; ?></td>
                    <td><?php echo $movie->director; ?></td>
                    <td><?php echo $movie->year; ?></td>
                    <td><button class="btn btn-default" data-toggle="modal" data-target="#viewModal" data-id="<?php echo $movie->id; ?>"><i class="glyphicon glyphicon-film"></i> Details</button></td>
                    <td><button class="btn btn-default" data-toggle="modal" data-target="#editModal" data-id="<?php echo $movie->id; ?>"><i class="glyphicon glyphicon-pencil"></i> Bearbeiten</button></td>
                    <td><a class="btn btn-danger triggerDelete" href="api/movie/" data-id="<?php echo $movie->id; ?>"><i class="glyphicon glyphicon-trash"></i> Löschen</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php else: ?>
                <p>&nbsp;</p>
                <div class="jumbotron text-center">Noch keine Filme vorhanden - klick doch mal auf den Button <strong>Neuen Film hinzufügen</strong> </div>
        <?php endif; ?>

        <!--Button "Film hinzufügen"-->
        <div class="row">
            <div class="col-xs-4"> </div>
            <button class="btn btn-default col-xs-4" data-toggle="modal" data-target="#editModal"><i class="glyphicon glyphicon-plus"></i> Neuen Film hinzufügen</button>
            <!--<button class="btn btn-default col-xs-3" data-toggle="modal" data-target="#editModal-imdb"><i class="glyphicon glyphicon-plus"></i> Neuen Film von IMDB klauen</button> -->
            <div class="col-xs-4"></div>
        </div>

    </div>
</div>
</div>

    <div class="modal fade" tabindex="-1" role="dialog" id="viewModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title-view"></h4>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
                </div>
            </div>
        </div>
    </div>


<div class="modal fade" tabindex="-1" role="dialog" id="editModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
                <button type="button" class="btn btn-primary"></button>
            </div>
        </div>
    </div>
</div>


<?php

echo $this->footer;

?>