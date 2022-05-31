$(document).ready(function () {
  let allMovies = {};
  let allShowTimes = {};
  let moviePoster = {};
  let selectedMovie;
  let firstOption = '<option disabled selected value> -- select an option -- </option>';
  let selectedShowTime;
  const totalTickets = 262;

  fetchTicketDetails();

  function fetchTicketDetails() {
    // fetch details for movie via ajax
    fetch("/now-showing")
      .then((response) => response.json())
      .then((response) => {
        // console.log(response);
        $.each(response.movies, function (key, item) {
          $("#movie_dropdown").append(
            '<option value="">' + item.title + '</option>'
          );
          allMovies[item.title] = item.movie_id;
          moviePoster[item.title] = item.movie_poster;
        });
      });
  }
  // attr("src", "images/card-front.jpg");
  $("#movie_dropdown").on("change", function () {

    selectedMovie = $("#movie_dropdown").find(":selected").text();
    console.log('source goes here: ' + moviePoster[selectedMovie])
    $("#movie_poster").attr("src", moviePoster[selectedMovie]);


    console.log('MOVIE')
    console.log(allMovies[selectedMovie]);
    fetch(`/show-times?movieid=${allMovies[selectedMovie]}`)
      .then((response) => response.json())
      .then((data) => {

        // clear rest field if movie changed
        $("#datetime_dropdown").empty();
        $("#datetime_dropdown").append(firstOption);

        $("#m_tickets").empty();
        $("#m_tickets").append(firstOption);

        $("#g_tickets").empty();
        $("#g_tickets").append(firstOption);

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

  $("#datetime_dropdown").on("change", function () {
    selectedShowTime = $("#datetime_dropdown").find(":selected").text();
    console.log('SHOWTIME')
    console.log(allShowTimes[selectedShowTime]);
    fetch(`/show-tickets?showtimeid=${allShowTimes[selectedShowTime]}`)
      .then((response) => response.json())
      .then((n_booked_tickets) => {
        console.log('NUMBER OF TICKETS')
        console.log(n_booked_tickets);

        // clear tickets field if time changed
        // empty tickets dropdown
        // append with disabled selection
        // loop to insert options

        remaining_tickets = totalTickets - n_booked_tickets;
        let selectedTickets;
        if (remaining_tickets > 0) {
          if (remaining_tickets > 10) {
            // if more than 10 tickets are available 
            // show total 10 tickets combined


            for (let index = 0; index < 10; index++) {
              $('#m_tickets').append(`<option > ${index + 1} </option>`);
            }

            $("#m_tickets").on("change", function () {
              selectedTickets = $('#m_tickets').find(":selected").text();
              console.log('SELECTED TICKETS: ' + selectedTickets)
              $('#g_tickets').empty();
              $('#g_tickets').append(firstOption);
              for (let index = 0; index < 10 - selectedTickets; index++) {
                $('#g_tickets').append(`<option > ${index + 1} </option>`);
              }
            })
          }



          else {
            console.log('remaining tickets ' + remaining_tickets)
            for (let index = 0; index < remaining_tickets; index++) {
              $('#m_tickets').append(`<option > ${index + 1} </option>`);
            }
            $("#m_tickets").on("change", function () {
              selectedTickets = $('#m_tickets').find(":selected").text();
              console.log('SELECTED TICKETS: ' + selectedTickets)

              $('#g_tickets').empty();
              $('#g_tickets').append(firstOption);
              let num = remaining_tickets - selectedTickets
              console.log('show tickets ' + num)
              for (let index = 0; index < remaining_tickets - selectedTickets; index++) {

                $('#g_tickets').append(`<option > ${index + 1} </option>`);
              }
            })
          }

        }
        else {
          $('#m_tickets').empty();
          $('#m_tickets').append(`
          <option disabled selected value> Tickets sold out please select another show </option>
          `);

          $('#g_tickets').empty();
          $('#g_tickets').append(`
          <option disabled selected value> Tickets sold out please select another show </option>
          `);
        }


      })

  });
});

/* 
SELECT COUNT(*) as TicketsBought
FROM Ticket
WHERE show_time_id = m.movie_show_time_id; */
