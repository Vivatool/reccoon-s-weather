<?php include_once "../App_for_weather/weather_api_app.php"?>

<?php require_once("header.php");?>

<main class="common-forecast">
    <div class="current-f-cast">
      <h1>Weather in <?php echo $curentSity; ?>, <?php echo $country; ?></h1>
      <h2><img src="<?php echo $icon; ?>"> <?php echo $currentTemp;?> </h2>
      <h3><?php echo $weatherDescription; ?></h3>
      <h3><?php echo date('H:ia')?> <?php echo date('F')?> <?php echo date('j')?></h3>

    <table border="1" width="100%" cellpadding="5">
   <tr>
    <td>Wind</td>
    <td><?php echo $windName; ?>, <?php echo $windSpeed; ?>, <?php echo $windFrom; ?> ( <?php echo $windFromValue; ?> )</td>
   </tr>
   <tr>
    <td>Cloudiness</td>
    <td><?php echo $weatherName; ?></td>
  </tr>
  <tr>
   <td>Pressure</td>
   <td><?php echo $pressure; ?></td>
 </tr>
 <tr>
  <td>Humidity</td>
  <td><?php echo $humidity; ?></td>
</tr>
<tr>
 <td>Sunrise</td>
 <td><?php echo $sunrise; ?></td>
</tr>
<tr>
 <td>Sunset</td>
 <td><?php echo $sunset; ?></td>
</tr>
 </table>
  </div>
  <div class="graphic">

  </div>


</main>


<?php require_once("footer.php");?>
