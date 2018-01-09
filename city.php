<!-- Valakia Interactive Oy -->
<?php

//defined('ABSPATH') or die("Cannot access pages directly.");

$city = "vaasa"; // Muokkaa tähän haluttu kaupunki.
// HUOM! Muista ääkköset eli Seinäjoki on seinaejoki.
// Jos nimessä on väli, laita se "new+york" (muutoin ei tarvita hipsuja)

// OpenWeatherMap API -haku määritellään tässä
$apiurl = 'http://api.openweathermap.org/data/2.5/weather?APPID=844ec52fd7f49c86d89c303e72748e20&units=metric&q=' . $city;
$response = file_get_contents($apiurl);
$weather = json_decode($response);

?>