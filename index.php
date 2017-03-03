<?php
  $jsondataHome = file_get_contents("data/home.json");
  $jsonHome = json_decode($jsondataHome, true);
  $jsondataNav = file_get_contents("data/nav_info.json");
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
     $currentPage = "home";
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
          echo '<table>';
          foreach ($jsonHome["contactInfo"] as $value) {
            echo '<tr>';
              echo '<td class="icon">';
                echo '<img src='.$imgPath.$value["icon"].'>';
              echo '</td>';
              echo '<td class="info">';
                echo '<p>'.$value["text"].'</p>';
              echo '</td>';
            echo '</tr>';
          }
          echo '</table>';
        echo '</div>';
        ?>
      </div>
      <div id="meText">
        <?php
          echo '<p>'.$jsonHome["textInfo"].'</p>';
        ?>
      </div>
    </main>
  </body>
</html>
