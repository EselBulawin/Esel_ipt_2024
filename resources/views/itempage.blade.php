<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Demo</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

</head>

<body>
    <div class="container">
        <h1>Laravel Demo</h1>

        <div class="nav-links">
            <span>Home Page</span> | <a href="{{ url('/profile') }}">Home Page</a>
        </div>
        <div class="nav-links">
            <span>Item Page</span> | <a href="{{ url('/itempage.php') }}">Item Page</a>
        </div>
        <div class="nav-links">
            <span>Pictue Page</span> | <a href="{{ url('/picturepage.php') }}">Picture Page</a>
        </div>

        <img src="image/n4yr35lj36db1.jpg" alt="">
 <img src="image/n4yr35lj36db1.jpg" alt="">
 <img src="image/n4yr35lj36db1.jpg" alt="">
    </div>


</body>

</html>
