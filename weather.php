<?php
// Weatherbit API key
$apiKey = "YOUR_API_KEY_HERE";
$city = $_GET['city'];
$country = $_GET['country'];

// Check if city and country are provided
if (!$city || !$country) {
    echo json_encode(["error" => "Please provide city and country"]);
    exit();
}

// Fetch current weather
$currentWeatherUrl = "https://api.weatherbit.io/v2.0/current?city=$city&country=$country&key=$apiKey";
$forecastUrl = "https://api.weatherbit.io/v2.0/forecast/daily?city=$city&country=$country&key=$apiKey";

// Make API calls
$currentWeather = file_get_contents($currentWeatherUrl);
$forecastWeather = file_get_contents($forecastUrl);

if ($currentWeather && $forecastWeather) {
    $currentData = json_decode($currentWeather, true);
    $forecastData = json_decode($forecastWeather, true);

    // Combine both data sets
    $weatherData = [
        "current" => $currentData['data'][0],
        "forecast" => $forecastData['data']
    ];

    echo json_encode($weatherData);
} else {
    echo json_encode(["error" => "Unable to fetch weather data"]);
}

