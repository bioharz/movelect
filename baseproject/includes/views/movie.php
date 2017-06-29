
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
<script type="text/javascript">

    //var selectedMovie = null;
    //var selectedMovieID = 0;
    //var allMovies = null;



    (function () {
        $(init);
        function init() {

            var imdbApiPath = "http://www.omdbapi.com/";
            var apiKey = "apikey=a7d2828f";
            var page = 1;

            $("#searchMovie").click(searchMovie);
            var inputMovie = $("#inputMovie");
            var table = $("#results");
            var tbody = table.find("tbody");

            function searchMovie() {
                var title = inputMovie.val();

                $.ajax({
                    url:  imdbApiPath+"?s=" + title + "&" + apiKey + "&type=movie&page=" + page,
                    //dataType: "jsonp",
                    success: renderMovies
                });
            }

            function renderMovies(movies) {


                tbody.empty();

                /*
                 returned Json:
                 "Search": [
                 {
                 "Title": "Star Wars: Episode IV - A New Hope",
                 "Year": "1977",
                 "imdbID": "tt0076759",
                 "Type": "movie",
                 "Poster": "https://images-na.ssl-images-amazon.com/images/M/MV5BYzQ2OTk4N2QtOGQwNy00MmI3LWEwNmEtOTk0OTY3NDk2MGJkL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNjc1NTYyMjg@._V1_SX300.jpg"
                 }
                 */

                var result = movies["Search"];

                allMovies = result;

                //this.allMovies = result;

                for (var counter in result) {

                    var movie = result[counter];

                    //this.selectedMovieID = movie.imdbID;

                    this.selectedMovie = movie;


                    var tr = $("<tr>");
                    var titletd = $("<td>").append(movie.Title);
                    var yeartd = $("<td>").append(movie.Year);

                    var postertd = $("<td>").append("<img src=\"" + movie.Poster + "\"  width='100'  onclick=\"selectMovie(\'"+movie.imdbID+"\')\" />");

                    tr.append(titletd);
                    tr.append(yeartd);
                    tr.append(postertd);
                    tbody.append(tr);

                }

            }


        }
    }





    )();

    function selectMovie(imdbID) {

        console.log(imdbID);


        var movieDetails;

        var imdbApiPath = "http://www.omdbapi.com/";
        var apiKey = "apikey=a7d2828f";

        findMoviebyID();

        function findMoviebyID() {
            //var title = inputMovie.val();

            $.ajax({
                url:  imdbApiPath+"?i=" + imdbID + "&" + apiKey + "&type=movie",
                //dataType: "jsonp",
                success: putMovieDetails
            });
        }

        /*
        console.log(indexId);
        console.log(allMovies[indexId]);

        var thisMovie = allMovies[indexId];
*/
        function putMovieDetails(selectedMovie) {

            console.log(selectedMovie);

            $("#movie_name").val(selectedMovie.Title);
            $("#director").val(selectedMovie.Director);
            $("#year").val(selectedMovie.Year);
            $("#imdb_id").val(selectedMovie.imdbID);
            $("#image_path").val(selectedMovie.Poster);

        }



    }





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