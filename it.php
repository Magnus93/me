<?php
  $jsondataIt = file_get_contents("data/it.json");
  $jsonIt = json_decode($jsondataIt, true);
  $jsondataNav = file_get_contents("data/nav_info.json");
  $jsonNav = json_decode($jsondataNav, true);
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="css/nav.css">
     <link rel="stylesheet" href="css/master.css">
     <link rel="stylesheet" href="css/it.css">
     <title>Magnus Gustafsson - IT</title>
   </head>
   <body>
     <?php
     $currentPage = "IT";
     include('navigation.php');
      ?>
     <main>
       <?php
       $imgPath='img/it/';
        foreach ($jsonIt as $value) {
          echo '<div class="container">';
            echo '<div class="imgContainer">';
              echo '<img src='.$imgPath.$value["img"].' class="itImg" >';
            echo '</div>';
            echo '<div class="infoContainer">';
              echo '<h2>'.$value["title"].'</h2>';
              foreach ($value["apps"] as $app) {
                echo '<p class="app">'.$app.'</p>';
              }
              echo '<p>'.$value["paragraph"].'</p>';
              if ($value["link"]) {
                echo '<a href='.$value["link"].' class="tryLink">Try it</a>';
              }
            echo '</div>';
          echo '</div>';
          //echo '<p>'.$value["paragraph"].'</p>';
        }
       ?>
     </main>

   </body>
 </html>
