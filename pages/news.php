
<?php require_once("header.php");?>

<main class="all-news">
<div class="articles">
  <?php
    foreach($html->find('.shortstory-img') as $img)
                {
                  echo $img;
                  echo "<br>";
                }
                 ?>
</div>


<?php require_once("footer.php");?>
