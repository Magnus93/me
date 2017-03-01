<?php
  $jsondata = file_get_contents("data/2d_portfolio.json");
  $json = json_decode($jsondata, true);
  $jsondataNav = file_get_contents("data/nav_info.json");
  $jsonNav = json_decode($jsondataNav, true);
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Magnus Gustafsson - 2D</title>
     <link rel="stylesheet" href="css/nav.css">
     <link rel="stylesheet" href="css/master.css">
     <link rel="stylesheet" href="css/3d.css">
     <script type="text/javascript" src="data/nav_info.json"></script>
     <script type="text/javascript" src="js/make_nav.js"></script>
   </head>
   <body>
    <?php
      $currentPage = "2D";
      include('navigation.php');
    ?>
     <main>
       <?php
        $imgPath='img/2d/';
        $appPath='img/app_logos/';
        foreach ($json['img2D'] as $key => $value) {
          echo '<div class="container">';
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
            echo '<div class="infoContainer">';
              echo '<h2>'.$value['title'].'</h2>';
              foreach ($value['apps'] as $app) {
                echo '<img class="appLogo" src='.$appPath.$app.'>';
              }
              echo '<p>'.$value["paragraph"].'</p>';
            echo '</div>';
          echo '</div>';
        }
        ?>
     </main>
   </body>
 </html>
