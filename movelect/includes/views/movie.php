<div class="row">
<!--search button-->
<div class="input-group">
    <input type="text" class="form-control text-center" id="inputMovie" placeholder="Film suchen">
    <span class="input-group-btn">
        <button id="searchMovie" type="submit" class="btn btn-default text-center">Go</button>
    </span>
</div>

    <!--Hinweis jumbotron-->
<div class="jumbotron text-center" id="noteSearch">
    Du kannst oben einen Film suchen und durch einen einfachen Klick auf den Movie-Poster die Film-Daten
    bequem ausfüllen lassen <strong>oder</strong> das Formular manuell ausfüllen/bearbeiten
</div>
<!--result-table-->
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

<!--input form-->
    <form method="<?php if($this->id): ?>put<?php else: ?>post<?php endif; ?>" action="api/movie/" class="col-xs-12">

        <div class="form-group">
            <label for="movie_name">Film Name:</label>
            <input type="text" name="movie_name" class="form-control" id="movie_name" value="<?php echo $this->movie_name; ?>">
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
            <input type="text" name="image_path" class="form-control" id="image_path" value="<?php echo $this->image_path; ?>">
        </div>
        <?php if($this->id): ?>
            <input type="hidden" name="id" value="<?php echo $this->id; ?>">
        <?php endif; ?>
    </form>
</div>
<script type="text/javascript" src="js/movie.js"></script>