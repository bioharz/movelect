(function(){
    $(init);
    function init()
    {

        var apiKey = "apikey=a7d2828f";


        $("#searchMovie").click(searchMovie);
        var inputMovie = $("#inputMovie");
        var table = $("#results");
        var tbody = table.find("tbody");
        function searchMovie()
        {
            var title = inputMovie.val();

            $.ajax({
                url:"http://www.omdbapi.com/?s="+title+"&"+apiKey,
                //dataType: "jsonp",
                success: renderMovies
            });
        }
        function renderMovies(movies){
            //console.log(movies);
            tbody.empty();

/*
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

for(var counter in result) {

    var movie = result[counter];

    var tr = $("<tr>");
    var titletd = $("<td>").append(movie.Title);
    var yeartd = $("<td>").append(movie.Year);


    var postertd = $("<td>").append("<img src=\""+movie.Poster+"\">");



    tr.append(titletd);
    tr.append(yeartd);
    tr.append(postertd);
    tbody.append(tr);



}

/*
                var title2 = movie.Title;
                var year = movie.Year;
               // var plot = movie.Plot;
                var poster = "<img src=\""+movie.Poster+"\">";
              //  var actors = movie.Actors;
               // var director = movie.Director;

                var tr = $("<tr>");
                var titletd = $("<td>").append(title2);
                var yeartd = $("<td>").append(year);
                var postertd = $("<td>").append(poster);
                tr.append(titletd);
                tr.append(yeartd);
                tr.append(postertd);
                tbody.append(tr);

*/

        }
    }
})();