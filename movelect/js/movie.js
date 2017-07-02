
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
                url: imdbApiPath + "?s=" + title + "&" + apiKey + "&type=movie&page=" + page,
                success: renderMovies
            });
        }

        function renderMovies(movies) {

            tbody.empty();

            var result = movies["Search"];
            allMovies = result;

            for (var counter in result) {

                var movie = result[counter];

                var tr = $("<tr>");
                var titletd = $("<td>").append(movie.Title);
                var yeartd = $("<td>").append(movie.Year);

                var postertd = $("<td>").append("<img src=\"" + movie.Poster + "\"  width='100'  onclick=\"selectMovie(\'" + movie.imdbID + "\')\" />");

                tr.append(titletd);
                tr.append(yeartd);
                tr.append(postertd);
                tbody.append(tr);
            }
        }

    }
})();

function selectMovie(imdbID) {

    var imdbApiPath = "http://www.omdbapi.com/";
    var apiKey = "apikey=a7d2828f";

    findMoviebyID();

    function findMoviebyID() {

        $.ajax({
            url: imdbApiPath + "?i=" + imdbID + "&" + apiKey + "&type=movie",
            success: putMovieDetails
        });
    }

    function putMovieDetails(selectedMovie) {


        $("#movie_name").val(selectedMovie.Title);
        $("#director").val(selectedMovie.Director);
        $("#year").val(selectedMovie.Year);
        $("#imdb_id").val(selectedMovie.imdbID);
        $("#image_path").val(selectedMovie.Poster);

    }


}


var editModal = $('#editModal');

editModal.find('form').unbind('submit');

editModal.find('form').bind('submit', function (e, that) {

    e.preventDefault();

    editModal.find('.btn-primary').prop('disabled', true);

    hasError = false;

    if (typeof that === 'undefined') {
        that = editModal.find('.btn-primary').get(0);
    }

    var requiredFields = ['#movie_name', '#director', '#year', '#imdb_id', '#image_path'];

    for (var i = 0; i < requiredFields.length; i++) {
        if ($(requiredFields[i]).val() == '') {
            hasError = true;
            $(requiredFields[i]).closest('.form-group').addClass('has-error');
        }
    }

    if (!hasError) {
        $.ajax({
            'url': $(this).attr('action'),
            'method': $(this).attr('method'),
            'data': $(this).serialize(),
            'dataType': "json",
            'success': function (receivedData) {

                if (receivedData.result) {
                    window.setTimeout(function () {
                        location.reload();
                    }, 500);

                }
                else {
                    editModal.find('.form-group').removeClass('has-error');

                    $.each(receivedData.data.errorFields, function (key, value) {
                        $('#' + key).closest('.form-group').addClass('has-error');
                    });
                }

                editModal.find('.btn-primary').prop('disabled', false);
            }
        });
    }
    else {
        editModal.find('.btn-primary').prop('disabled', false);
    }

});
