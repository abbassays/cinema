$(document).ready(function () {

  let allMovies = {};
  let allShowTimes = {};
  let selectedMovie;
  let selectedShowTime;
  let datetime;
  fetchTicketDetails();

  function fetchTicketDetails() {

    // fetch details for movie via ajax
    fetch('/fetch-movie').then((response) => response.json()).then((response) => {


      console.log(response.movieDetails)
      $.each(response.movieDetails, function (key, item) {
        $('#movie_dropdown').append('<option value="">' + item.title + '</option>')

        allMovies[item.title] = item.movie_id
      });
      console.log(allMovies)
      
      $('#movie_dropdown').on('change', function () {
        selectedMovie = $('#movie_dropdown').find(":selected").text()
        console.log('on selection ' + selectedMovie)
        fetch('/fetch-movie-showtime',{
          method:'POST',
          body:{}}).then((response) => response.json())
          .then((response) => {})
      });
      
    });
    
    // fetch details for its show time via ajax
    
    
    // $.ajax({
    //   type: "POST",
    //   url: "/fetch-movie-showtime",

    //   dataType: "json",
    //   success: function (response) {
      //     console.log('showTimeDetails')
      //     console.log(response.showTimeDetails)

    //     $('#movie_dropdown').on('change', function () {

    //       var arr = response.showTimeDetails.filter(obj => obj.belongs_to == allMovies[selectedMovie])

    //       $.each(arr, function (key, item) {
    //         datetime = item.date + ' ' + item.time;
    //         $('#datetime_dropdown').append('<option value="">' + datetime + '</option>')

    //         allShowTimes[datetime] = item.movie_show_time_id;
    //       });

    //       console.log('ALL SHOW TIMES SHOWING HERE')
    //       console.log(allShowTimes)

    //       $('#datetime_dropdown').on('change', function () {
    //         selectedShowTime = $('#datetime_dropdown').find(":selected").text()
    //       });
    //     });
    //   }
    // });

    $('#m_tickets').on('change', function () {
      console.log('selected show time')
      console.log(allShowTimes[selectedShowTime])
    });




  }




});



/* 
SELECT COUNT(*) as TicketsBought
FROM Ticket
WHERE show_time_id = m.movie_show_time_id; */