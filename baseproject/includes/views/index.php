<?php

echo $this->header;

?>
<div id="main">
    <div class="row">

        <button class="btn btn-primary" data-toggle="modal" data-target="#editModal"><i class="glyphicon glyphicon-plus"></i> Neuen Film manuell hinzufügen</button>

        <button class="btn btn-primary" data-toggle="modal" data-target="#editModal-imdb"><i class="glyphicon glyphicon-plus"></i> Neuen Film von IMDB klauen</button>


        <?php if($this->movies): ?>
        <table class="table table-striped">
            <thead>
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
                <div class="alert alert-info">Noch keine Filme vorhanden - Sie können über den Button <strong>Neuen Film hinzufügen</strong> eine neue Film Movelect hinzufügen.</div>
        <?php endif; ?>

    </div>
</div>


    <div class="modal fade" tabindex="-1" role="dialog" id="viewModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


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
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<?php

echo $this->footer;

?>