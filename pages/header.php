<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Raccoon's Weather</title>
    <link rel="stylesheet" href="/style/normalize.css">
    <link rel="stylesheet" href="/style/style.css">
    <link rel="stylesheet" href="/style/style-forecast.css">
    <link rel="stylesheet" href="/style/style-news.css">
    <link rel="stylesheet" href="/style/style-reg.css">
    <link rel="stylesheet" href="/fonts.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header class="m-header" id="header">

<div class="radio">
  <audio controls autoplay>
     <source src="http://online-kissfm.tavrmedia.ua:8000/KissFM">
   </audio>

</div>
    <div class="container">
        <a href="../index.php" class="logo"><span class="green">Raccoon's</span> Weather</a>
        <!--<div class="search">
        <form action="" method="get" class="field-search">
            <p><input type="search" name="q" placeholder="Place or country">
                <button class="src-btn" type="submit"><i class="fa fa-search"></i></button>
        </form>
        <input type="text" name="search" placeholder="Search..">
        </div>-->
        <div>
          <form class="login">
            <button class="btn-log"><a href="/pages/login.php"><i class="fa fa-sign-in"></i> Sign in</a></button>
          </form>
          <form class="regist">
            <button class="btn-log"><a href="/pages/registration.php"><i class="fa fa-arrow-circle-down"></i> Sign Up</a></button>
          </form>
          <!--<form class="search-btn">

            <button class="btn-log"><a href="login.php"><i class="fa fa-search"></i> Change location</a></button>
          </form>-->
          <form class="search">
            <button class="src-btn" type="submit"><i class="fa fa-search"></i></button>
            <input type="text" name="search" placeholder="Change location..">
          </form>
          </div>
          </div>
