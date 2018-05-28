<?php require_once("header.php");?>

<main class="first-container">
    <div class="sec-cont">
    <div class="date-weather">
    <section class="calendar">
        <div class="day">
            <button class="inline btn-left"><i class="fa fa-angle-left" style="font-size:24px"></i></button>
            <h1 class="day inline apple-font"> <?php echo date('l')?></h1>
            <button class="inline btn-right"><i class="fa fa-angle-right" style="font-size:24px"></i></button>
        </div>
        <div class="date">
            <h1 class="current-day"><?php echo date('j')?></h1>
            <h3 class="month"><?php echo date('F')?></h3>
            <h2 class="plans">Meeting in cafe</h2>
            <ul class="list-slid">
                <li><i class="fa fa-genderless"></i></li>
                <li><i class="fa fa-genderless"></i></li>
                <li><i class="fa fa-genderless"></i></li>
            </ul>
        </div>
    </section>

    <section class="weather">
        <h1 class="temp"><?php echo $currentTemp;?> </h1>
        <div class="column">
          <h2 class="city"><?php echo $curentSity; ?></h2>
          <h3 class="time"><?php echo date('H:ia')?></h3>
        </div>
        <form class="btn-more2">
          <button class="btn-more1"><a href="pages/forecast.php">More</a></button>
        </form>
    </section>
        </div>
    <section class="news">
        <h1 class="h-line ">News</h1>
        <div class="article">
            <ul class="list-news">
                <li>
                    <h2><a href="https://www.accuweather.com/en/weather-news"> Cold waves, possible snow to eye northeastern US before winter weather finally gives up</a></h2>
                    <p>Following additional waves of cold air into the second weekend of April, the pattern is likely to change</p>
                </li>
                <li>
                    <h2><a href="https://www.accuweather.com/en/weather-news">Wildfire risk to flare up over southern, central Plains through Tuesday</a></h2>
                    <p>The same storm set to trigger severe thunderstorms over the Mississippi Valley and snow over the northern tier states will bring</p>
                </li>
                <li>
                    <h2><a href="https://www.accuweather.com/en/weather-news">Early April rain to return risk of flooding, mudslides to California</a></h2>
                    <p>A 2 double-barreled storm will take aim at California with drenching rain, high-country snow and the risk of flooding and mudslides later this week.</p>
                </li>
            </ul>
            <form>
                <button class="btn-more"><a href="App_for_weather/parser_news_app.php">More</a></button>
            </form>
        </div>
    </section>
    </div>
    <div class="third-container">
        <section class="gallery">
            <img src="img/image-r.jpg" width="100%"  alt="picture of raccoon">
        </section>
        <section class="trailer">
            <iframe width="100%" height="100%"  src="https://www.youtube.com/embed/D9joM600LKA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </section>
    </div>
</main>

<?php require_once("footer.php");?>
