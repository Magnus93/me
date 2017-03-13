<?php
  $jsondataHome = file_get_contents("data/home.json");
  $jsonHome = json_decode($jsondataHome, true);
  $jsondataNav = file_get_contents("data/nav.json");
  $jsonNav = json_decode($jsondataNav, true);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Magnus Gustafsson</title>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/nav.css">
  </head>
  <body>
    <?php
     $currentPage = "Hem";
     include('navigation.php');
    ?>
    <main>
      <?php
      $imgPath = "img/home/";
      ?>
      <div id="topMain">
        <div id="myFace">
          <?php
            echo '<img src='.$imgPath.$jsonHome["face"].'>';
          ?>
        </div>
        <?php
        echo '<div id="topRight">';
          echo '<h1>'.$jsonHome["name"].'</h1>';
          echo '<h2>'.$jsonHome["subtitle"].'</h2>';
          echo '<div id="meText">';
            echo '<p>'.$jsonHome["textInfo"].'</p>';
          echo '</div>';
        echo '</div>';
        ?>
      </div>
    </main>
  </body>
</html>
