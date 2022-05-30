<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="js/jquery.min.js"></script>
    <script src="{{asset('js/booking.js')}}"></script>

    <title>Document</title>
</head>

<body>





    <h1>Book a Ticket</h1>

    <img src="" alt="Selected Movie Poster">

    <form action="{{route('booking.save')}}" method="POST" id="form">

        <label for="movie">Select a movie:</label>
        <br>
        <select name="movie_title" id="movie">
            <option disabled selected value> -- select an option -- </option>
            <option value="movie 1">movie 1</option>
            <option value="movie 1">movie 1</option>
            <option value="movie 1">movie 1</option>
            <option value="movie 1">movie 1</option>
        </select>
        <br>

        <label for="date">Select Date:</label>
        <br>
        <input type="date" name="date" id="">
        <br>


        <label for="time">Select time:</label>
        <br>
        <select name="time" id="time">
            <option disabled selected value> -- select an option -- </option>
            <option value="">Time 1</option>
            <option value="">Time 2</option>
            <option value="">Time 3</option>
        </select>
        <br>


        <label for="movie">Select Number of Tickets:</label>
        <br>
        <select name="tickets" id="tickets">
            <option disabled selected value> -- select an option -- </option>
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
        </select>
        <br>
        <input type="submit" name="" value="proceed to seat selection" id="">
    </form>
</body>

</html>