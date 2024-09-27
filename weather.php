<?php
$apiKey = "e4e6ec8f0ec547bfb6bdfc4b533f0d25";
$city = $_GET['city'];
$country = $_GET['country'];

if (!$city || !$country) {
    echo json_encode(["error" => "Please provide city and country"]);
    exit();
}

$currentWeatherUrl = "https://api.weatherbit.io/v2.0/current?city={$city}&country={$country}&key={$apiKey}";
$forecastUrl = "https://api.weatherbit.io/v2.0/forecast/daily?city={$city}&country={$country}&key={$apiKey}";

// Fetch current weather
$currentWeather = @file_get_contents($currentWeatherUrl);
$forecastWeather = @file_get_contents($forecastUrl);

if ($currentWeather === FALSE || $forecastWeather === FALSE) {
    echo json_encode(["error" => "Unable to fetch weather data. Check API key or city/country name."]);
    exit();
}

// Decode the API response
$currentData = json_decode($currentWeather, true);
$forecastData = json_decode($forecastWeather, true);

if (isset($currentData['data']) && isset($forecastData['data'])) {
    $weatherData = [
        "current" => $currentData['data'][0],
        "forecast" => $forecastData['data']
    ];
    echo json_encode($weatherData);
} else {
    echo json_encode(["error" => "Invalid API response."]);
}
