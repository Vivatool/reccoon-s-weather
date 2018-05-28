<?php

$request = file_get_contents("http://ip-api.com/json");
$getSityByApi = json_decode($request, true);
$curentSity = $getSityByApi['regionName'];
$curentSityAndCodeContry = $getSityByApi['regionName'].",".$getSityByApi['countryCode'];


define("KEYY", "c40e12e115abde1de29ceb654ff6f754");
$request = 'http://api.openweathermap.org/data/2.5/weather?q='.$curentSityAndCodeContry.'&units=metric&mode=xml&APPID='.KEYY;
    $xml = new SimpleXMLElement(file_get_contents($request));

    $country = $xml->city->country;
    $city = $xml->city['name'];
    $currentTemp = $xml->temperature['value'].'°C';
    $icon = 'http://openweathermap.org/img/w/'.$xml->weather['icon'].'.png';
    $weatherDescription = $xml->clouds->clouds['name'];
    $windName = $xml->wind->speed['name'];
    $windSpeed = $xml->wind->speed['value']."m/s";
    $windFrom = $xml->wind->direction['name'];
    $windFromValue = $xml->wind->direction['value'];
    $weatherName = $xml->weather['value'];
    $pressure = $xml->pressure['value'].' hPa';
    $humidity = $xml->humidity['value'].' %';
    $sunrise = $xml->city->sun['rise'];
    $sunset = $xml->city->sun['set'];

?>
