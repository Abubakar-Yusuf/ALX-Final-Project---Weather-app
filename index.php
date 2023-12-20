<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="weather-app.css">
    <script src="weather-app.js" defer></script>
    <title>User Dashboard</title>
</head>

<body>
    <!-- <div class="container"> -->
        <div class="card">
            <h2>Welcome to Dashboard</h2>
            <a href="logout.php" class="btn btn-warning">Logout</a>
            <div class="search">
                <input type="text" placeholder="enter city name"
                spellcheck="false">
                <button><img src="search.png"></button>
            </div>
            <div class="error">
                <p>Invalid city name</p>
            </div>
            <div class="weather">
                <img src="rain.png" class="weather-icon">
                <h1 class="temp">22°c</h1>
                <h2 class="city">New York</h2>
                <div class="details">
                    <div class="col">
                        <img src="humidity.png">
                        <div>
                            <p class="humidity">50%</p>
                            <p>Humidity</p>
                        </div>
                    </div>
                    <div class="col">
                        <img src="wind.png">
                        <div>
                            <p class="wind">15 km/h</p>
                            <p>Wind Speed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- </div> -->

</body>
</html>