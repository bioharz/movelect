<div class="row">
    <form method="<?php if($this->id): ?>put<?php else: ?>post<?php endif; ?>" action="api/movie/" class="col-xs-12">

        <div class="form-group">
            <label for="movie_name">Aktor:</label>
            <input type="text" name="movie_name" class="form-control" id="movie_name" value="<?php echo $this->movie_name; ?>">
        </div>
        <div class="form-group">
            <label for="director">Film Name:</label>
            <input type="text" name="director" class="form-control" id="director" value="<?php echo $this->director; ?>">
        </div>
        <div class="form-group">
            <label for="year">Jahr</label>
            <input type="text" class="form-control" name="year" id="year" value="<?php echo $this->year; ?>">
        </div>
        <div class="form-group">
            <label for="imdb_id">imdb-id</label>
            <input type="text" name="imdb_id" class="form-control" id="imdb_id" value="<?php echo $this->imdb_id; ?>">
        </div>
        <div class="form-group">
            <label for="image_path">Bild Pfad</label>
            <input type="text" name="image_path" class="form-control" id="image_path" value="<?php echo $this->image_path; ?>">
        </div>
        <?php if($this->id): ?>
            <input type="hidden" name="id" value="<?php echo $this->id; ?>">
        <?php endif; ?>
    </form>
</div>
<script type="text/javascript">

	var editModal = $('#editModal');

	editModal.find('form').unbind('submit');

	editModal.find('form').bind('submit', function(e, that) {

		e.preventDefault();

		editModal.find('.btn-primary').prop('disabled', true);

		hasError = false;

		if(typeof that === 'undefined') {
			that = editModal.find('.btn-primary').get(0);
		}

		var requiredFields = ['#movie_name', '#director', '#year', '#imdb_id', '#image_path'];

		for(var i = 0; i < requiredFields.length; i++) {
			if($(requiredFields[i]).val() == '') {
				hasError = true;
				$(requiredFields[i]).closest('.form-group').addClass('has-error');
			}
		}

		if(!hasError)
		{
			$.ajax({
				'url': $(this).attr('action'),
				'method': $(this).attr('method'),
				'data': $(this).serialize(),
				'dataType': "json",
				'success': function (receivedData) {

					if(receivedData.result)
					{
						window.setTimeout(function() {
							location.reload();
						}, 500);

					}
					else
					{
						editModal.find('.form-group').removeClass('has-error');

						$.each(receivedData.data.errorFields, function(key, value) {
							$('#'+key).closest('.form-group').addClass('has-error');
						});
					}

					editModal.find('.btn-primary').prop('disabled', false);
				}
			});
		}
		else
		{
			editModal.find('.btn-primary').prop('disabled', false);
		}

	});

</script>