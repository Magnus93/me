<?php
  $jsondata = file_get_contents("data/graphics.json");
  $json = json_decode($jsondata, true);
  $jsondataNav = file_get_contents("data/nav.json");
  $jsonNav = json_decode($jsondataNav, true);
 ?>


 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Magnus Gustafsson - Graphics</title>
     <link rel="stylesheet" href="css/nav.css">
     <link rel="stylesheet" href="css/master.css">
     <link rel="stylesheet" href="css/graphics.css">
   </head>
   <body>
    <?php
    $currentPage = "Grafik";
    include('navigation.php');
    ?>
     <main>
       <?php
        $imgPath='img/graphics/';
        $appPath='img/app_logos/';
        foreach ($json['img3D'] as $value) {
          echo '<div class="container">';
            echo '<div class="infoContainer">';
              echo '<h2>'.$value['title'].'</h2>';
              foreach ($value['apps'] as $app) {
                echo '<img class="appLogo" src='.$appPath.$app.' title='.substr($app, 0, -4).'>';
              }
              echo '<p>'.$value["paragraph"].'</p>';
            echo '</div>';
            echo '<div class="imgContainer">';
            if ($value["type"] == "img" ) {
              foreach ($value["src"] as $img) {
                echo '<img src='.$imgPath.$img.'>';
              }
            } elseif ($value["type"] == "vid") {
              foreach ($value["src"] as $vid) {
                echo '<iframe src='.$vid.'></iframe>';
              }
            }
            echo '</div>';
          echo '</div>';
        }
        ?>
     </main>
   </body>
 </html>
