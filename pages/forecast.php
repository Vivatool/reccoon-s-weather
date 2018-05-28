<?php include_once "../App_for_weather/weather_api_app.php"?>

<?php require_once("header.php");?>

<main class="common-forecast">
    <div class="current-f-cast">
      <h1>Weather in <?php echo $curentSity; ?></h1>
      <h2><img src="<?php echo $icon; ?>"> <?php echo $currentTemp;?> </h2>
      <h3>Clear sky</h3>
      <h3>19:22 May 28</h3>

    <table border="1" width="100%" cellpadding="5">
   <tr>
    <td>Wind</td>
    <td>Light breeze, 1.8 m/s, NorthEast ( 46.5019 )</td>
   </tr>
   <tr>
    <td>Cloudiness</td>
    <td>Sky is clear</td>
  </tr>
  <tr>
   <td>Pressure</td>
   <td>1024.16 hpa</td>
 </tr>
 <tr>
  <td>Humidity</td>
  <td>72 %</td>
</tr>
<tr>
 <td>Sunrise</td>
 <td>06:52</td>
</tr>
<tr>
 <td>Sunset</td>
 <td>23:04</td>
</tr>
 </table>
  </div>
  <div class="graphic">

  </div>


</main>


<?php require_once("footer.php");?>
