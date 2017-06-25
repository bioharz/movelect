<?php

echo $this->header;

?>
    <div id="main">
        <div class="row">

            <button class="btn btn-primary" data-toggle="modal" data-target="#editModal"><i class="glyphicon glyphicon-plus"></i> Neue Gruppe anlegen</button>

            <?php if($this->group): ?>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Since</th>
                        <th>Owner_id</th>
                        <th>GrpPwd</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($this->group as $value): ?>
                        <tr>
                            <td><?php echo $value->id; ?></td>
                            <td><?php echo $value->name; ?></td>
                            <td><?php echo $value->since; ?></td>
                            <td><?php echo $value->owner_id; ?></td>
                            <td><?php echo $value->GrpPwd; ?></td>
                            <td><button class="btn btn-default" data-toggle="modal" data-target="#editModal" data-id="<?php echo $group->id; ?>"><i class="glyphicon glyphicon-pencil"></i> Bearbeiten</button></td>
                            <td><a class="btn btn-danger triggerDelete" href="api/group/" data-id="<?php echo $group->id; ?>"><i class="glyphicon glyphicon-trash"></i> Löschen</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>&nbsp;</p>
                <div class="alert alert-info">Noch keine Gruppen vorhanden - Sie können über den Button <strong>Neue Gruppe anlegen</strong> eine neue Gruppe hinzufügen.</div>
            <?php endif; ?>

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
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


<?php

echo $this->footer;

?>