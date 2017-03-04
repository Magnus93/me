<?php
  $jsondataIt = file_get_contents("data/it.json");
  $jsonIt = json_decode($jsondataIt, true);
  $jsondataNav = file_get_contents("data/nav.json");
  $jsonNav = json_decode($jsondataNav, true);
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="css/nav.css">
     <link rel="stylesheet" href="css/master.css">
     <link rel="stylesheet" href="css/it.css">
     <title>Magnus Gustafsson - Prog.</title>
   </head>
   <body>
     <?php
      $currentPage = "Programmering";
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
                echo '<a target="_blank" href='.$value["link"].' class="tryLink">Testa</a>';
              }
            echo '</div>';
          echo '</div>';
          //echo '<p>'.$value["paragraph"].'</p>';
        }
       ?>
     </main>

   </body>
 </html>
