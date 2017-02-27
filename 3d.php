<?php
  $jsondata = file_get_contents("data/3d_portfolio.json");
  $json = json_decode($jsondata, true);
 ?>


 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>this is 3d!</title>
     <link rel="stylesheet" href="css/nav.css">
     <link rel="stylesheet" href="css/master.css">
     <link rel="stylesheet" href="css/3d.css">
     <script type="text/javascript" src="data/nav_info.json">
     </script>
     <script type="text/javascript" src="js/make_nav.js"></script>
     <script type="text/javascript">
        docLoadedNav(indexIsLoaded);
     </script>
   </head>
   <body>
     <main>
       <?php
        $imgPath='img/3d/';
        $appPath='img/app_logos/';
        foreach ($json['img3D'] as $key => $value) {
          echo '<div class="container">';
            echo '<div class="imgContainer">';
              echo '<img src='.$imgPath.$value['src'].'>';
            echo '</div>';
            echo '<div class="infoContainer">';
              echo '<h2>'.$value['title'].'</h2>';
              foreach ($value['apps'] as $app) {
                echo '<img class="appLogo" src='.$appPath.$app.'>';
              }
              echo '<p>Some text about it</p>';
            echo '</div>';
          echo '</div>';
        }

        ?>
       <!--<div class="container">
         <div class="imgContainer">
            <img src="img/3d/Beer.png" alt="Here is an image or Video">
         </div>
         <div class="infoContainer">
            <h1>This is a title</h1>
            <p>This is some info</p>
         </div>
       </div>
       <div class="container">
          <div class="imgContainer">
            <img src="img/3d/Coke.png" alt="Coke here">
          </div>
          <div class="infoContainer">
            <h1>Tiiiiitle</h1>
            <img src="img/app_logos/3dsMax.png" alt="maxHere"   class="appLogo">
            <img src="img/app_logos/photoshop.png" alt="psHere" class="appLogo">
            <p>iiiiinfffffooooo!</p>
          </div>
       </div>-->
     </main>
   </body>
 </html>
