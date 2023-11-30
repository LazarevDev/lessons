<?php 

$apiKey = 'ebf0be693196f08c78cb0dad6827e54b';
$city = 'voronezh';

$url = "http://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey&lang=ru";

$response = file_get_contents($url);
$data = json_decode($response, true);

$temperature = $data['main']['temp'];
$weather = $data['weather'][0]['description'];

echo "Погода в Воронеже<br>";
echo "Погода: " . $weather."<br>";
echo "Скорость ветра: " . $data['wind']['speed'];
