<?php

$request = file_get_contents("http://ip-api.com/json");
$getSityByApi = json_decode($request, true);
$curentSity = $getSityByApi['regionName'];
$curentSityAndCodeContry = $getSityByApi['regionName'].",".$getSityByApi['countryCode'];


define("KEYY", "c40e12e115abde1de29ceb654ff6f754");
$request = 'http://api.openweathermap.org/data/2.5/weather?q='.$curentSityAndCodeContry.'&units=metric&APPID='.KEYY;
$response  = file_get_contents($request);
$AllWeather  = json_decode($response, true);

    $icon = 'http://openweathermap.org/img/w/'.$AllWeather['weather'][0]['icon'].'.png';
    $currentTemp = $AllWeather['main']['temp'].'°C';
    

?>
