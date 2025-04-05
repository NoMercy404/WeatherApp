<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1>🌤 Weather App</h1>
        <div id="weather">
            <form method="POST">
                <input type="text" name="city" placeholder="Enter city..." required>
                <button name="getweather"><i class="fas fa-search"></i> Get Weather</button>
            </form>
        </div>
        <div id="weather-result">
        <?php
function ConvertKalvinToCelcius($temp){
    return round($temp - 273.15, 1);
}

function UnixToUtc($time){
    $hour = date("H", $time);
    $minute = date("i", $time);
    return $hour . ":" . $minute;
}

if (isset($_POST['getweather'])) {
    $city = $_POST['city'];
    $key = "c4c37e5b72bb49c80f3691ada726fa77";
    $url = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$key";

    // Użycie cURL do pobrania danych z API
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $data = curl_exec($ch);

    curl_close($ch);
    // Sprawdzanie, czy odpowiedź jest poprawna
    $json = json_decode($data);

    if ($json === null || $json->cod != 200) {
        echo "<h3 style='color: black;'>Error: City not found.</h3>";
        exit;
    }

    // Wyświetlanie danych pogodowych
    $icon = $json->weather[0]->icon;
    echo "<h3>".$city." ".ConvertKalvinToCelcius($json->main->temp)."°C </h3>";
    echo "<img src='https://openweathermap.org/img/wn/$icon@2x.png'>";
    echo "<br>";
    echo $json->weather[0]->description;
    echo "<br>";

    echo "<div class='weather-detail'>";
    echo "<img src='sunrise.png' width='25' height='25' class='icon'>"; 
    echo "<span>Sunrise: " . UnixToUtc($json->sys->sunrise) . "</span>";
    echo "<img src='wind.png' width='25' height='25' class='icon'>"; 
    echo "<span class='wind-speed'>Wind speed: " . $json->wind->speed . " m/s</span>";
    echo "</div>";
    
    echo "<div class='weather-detail'>";
    echo "<img src='sunset.png' width='30' height='27' class='icon'>"; 
    echo "<span>Sunset: " . UnixToUtc($json->sys->sunset) . "</span>";
    echo "<img src='humidity.png' width='30' height='27' class='icon'>"; 
    echo "<span class='humidity'>Humidity: " . $json->main->humidity . "%</span>";
    echo "</div>";
}
?>

        </div>
    </div>
</body>
</html>
