(function(){
    $(init);
    function init()
    {
        $("#searchMovie").click(searchMovie);
        var inputMovie = $("#inputMovie");
        var table = $("#results");
        var tbody = table.find("tbody");
        function searchMovie()
        {
            var title = inputMovie.val();
            alert("searchmovie" + title);

            $.ajax({
                url:"http://www.omdbapi.com/?t="+title+"&apikey=a7d2828f",
                //dataType: "jsonp",
                success: renderMovies
            });
        }
        function renderMovies(movies){
            console.log(movies);
            tbody.empty();



                var title2 = movies.Title;
                var year = movies.Year;
               // var plot = movie.Plot;
                var poster = "<img src=\""+movies.Poster+"\">";
              //  var actors = movie.Actors;
               // var director = movie.Director;

                alert(title2);
                var tr = $("<tr>");
                var titletd = $("<td>").append(title2);
                var yeartd = $("<td>").append(year);
                var postertd = $("<td>").append(poster);
                tr.append(titletd);
                tr.append(yeartd);
                tr.append(postertd);
                tbody.append(tr);



        }
    }
})();