<div class="row">


    <form method="<?php if ($this->id): ?>put<?php else: ?>post<?php endif; ?>" action="api/movie/" class="col-xs-12">

        <div class="form-group">
            <label for="movie_name">Film Name:</label>
            <input type="text" name="movie_name" class="form-control" id="movie_name"
                   value="<?php echo $this->movie_name; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="director">Regisseur:</label>
            <input type="text" name="director" class="form-control" id="director" value="<?php echo $this->director; ?>"
                   readonly>
        </div>
        <div class="form-group">
            <label for="year">Jahr:</label>
            <input type="text" class="form-control" name="year" id="year" value="<?php echo $this->year; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="imdb_id">imdb-id:</label>
            <input type="text" name="imdb_id" class="form-control" id="imdb_id" value="<?php echo $this->imdb_id; ?>"
                   readonly>
        </div>
        <div class="form-group">
            <label for="imdb_link">imdb-link:</label>
            <input type="text" name="imdb_link" class="form-control" id="imdb_link"
                   value="http://www.imdb.com/title/<?php echo $this->imdb_id; ?>" readonly>
        </div>

        <div class="form-group">
            <label for="image_path">Bild:</label>
            <img src="<?php echo $this->image_path; ?>" class="img-responsive" alt="Movie Image">
        </div>
        <?php if ($this->id): ?>
            <input type="hidden" name="id" value="<?php echo $this->id; ?>">
        <?php endif; ?>
    </form>
</div>
<script type="text/javascript" src="js/movie-detail.js"></script>