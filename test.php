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
$wind = $xml->wind->speed['name'];
echo "Country: $country<br/>City: $city<br/>Wind: $wind";
