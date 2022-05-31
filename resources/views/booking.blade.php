<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="{{asset('js/booking.js')}}"></script>
    <title>Document</title>
</head>

<body>





    <h1>Book a Ticket</h1>

    <img src="" id="movie_poster" alt="Selected Movie Poster">

    <form action="#" method="get" id="form">

        @csrf
        <label for="movie">Select a movie:</label>
        <br>
        <select name="movie_title" id="movie_dropdown">
            <option disabled selected value> -- select an option -- </option>
        </select>
        <br>

        <label for="date">Select Date & Time:</label>
        <br>
        <select name="datetime" id="datetime_dropdown">
            <option disabled selected value> -- select an option -- </option>
        </select>
        <br>

        <label for="movie">Select at most 10 Tickets</label>
        <br>
        <label for="movie">Select Number of Member Tickets:</label>
        <br>
        <select name="m_tickets" id="m_tickets">
            <option disabled selected value> -- select an option -- </option>
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
        </select>
        <br>

        <label for="movie">Select Number of Guest Tickets:</label>
        <br>
        <select name="g_tickets" id="g_tickets">
            <option disabled selected value> -- select an option -- </option>
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
        </select>
        <br>
        <input type="submit" name="submit" value="proceed to seat selection" id="submit">
    </form>



</body>

</html>