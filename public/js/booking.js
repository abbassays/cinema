$(document).ready(function () {
    let allMovies = {};
    let allShowTimes = {};
    let selectedMovie;
    let selectedShowTime;
    let datetime;
    fetchTicketDetails();

    function fetchTicketDetails() {
        // fetch details for movie via ajax
        fetch("/now-showing")
            .then((response) => response.json())
            .then((response) => {
                // console.log(response);
                $.each(response.movies, function (key, item) {
                    $("#movie_dropdown").append(
                        '<option value="">' + item.title + "</option>"
                    );
                    allMovies[item.title] = item.movie_id;
                });
            });
    }

    $("#movie_dropdown").on("change", function () {
        selectedMovie = $("#movie_dropdown").find(":selected").text();
        console.log(allMovies[selectedMovie]);
        fetch(`/showtimes?movieid=${allMovies[selectedMovie]}`)
            .then((response) => response.json())
            .then((data) => {
                $("#showtime_dropdown").empty();
                $.each(data.showtimes, function (key, item) {
                    $("#datetime_dropdown").append(
                        '<option value="">' +
                            item.date +
                            " " +
                            item.time +
                            "</option>"
                    );
                    allShowTimes[item.date + " " + item.time] =
                        item.movie_show_time_id;
                });
            });
    });
});

/* 
SELECT COUNT(*) as TicketsBought
FROM Ticket
WHERE show_time_id = m.movie_show_time_id; */
