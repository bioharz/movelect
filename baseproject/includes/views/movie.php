<div class="row">

    <div class="row date">

        <div class="col-lg-6">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
            </div>
        </div>
    </div>

    <div class="col-xs-1"/>
    <div class="col-xs-10">


        <input type="text" class="form-control text-center" id="inputMovie" placeholder="add movie">
        <button id="searchMovie" type="submit" class="col-xs-4 btn btn-default text-center">search</button>

        <table class="table table-striped" id="results">
            <thead>
            <tr>
                <th>Title</th>
                <th>Year</th>
                <th>Poster</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </tbody>

        </table>
    </div>
    <div class="col-xs-1"/>

</div>

<form method="<?php if ($this->id): ?>put<?php else: ?>post<?php endif; ?>" action="api/movie/" class="col-xs-12">

    <div class="form-group">
        <label for="movie_name">Film Name:</label>
        <input type="text" name="movie_name" class="form-control" id="movie_name"
               value="<?php echo $this->movie_name; ?>">
    </div>
    <div class="form-group">
        <label for="director">Regisseur:</label>
        <input type="text" name="director" class="form-control" id="director" value="<?php echo $this->director; ?>">
    </div>
    <div class="form-group">
        <label for="year">Jahr:</label>
        <input type="text" class="form-control" name="year" id="year" value="<?php echo $this->year; ?>">
    </div>
    <div class="form-group">
        <label for="imdb_id">imdb-id:</label>
        <input type="text" name="imdb_id" class="form-control" id="imdb_id" value="<?php echo $this->imdb_id; ?>">
    </div>
    <div class="form-group">
        <label for="image_path">Bild Pfad:</label>
        <input type="text" name="image_path" class="form-control" id="image_path"
               value="<?php echo $this->image_path; ?>">
    </div>
    <?php if ($this->id): ?>
        <input type="hidden" name="id" value="<?php echo $this->id; ?>">
    <?php endif; ?>
</form>
</div>
<script type="text/javascript" src="js/movie.js"></script>