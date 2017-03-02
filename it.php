<?php
  $jsondataIt = file_get_contents("data/it.json");
  $jsonIt = json_decode($jsondata, true);
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
       <p>Hejsan</p>
       <?php
       echo "This is in php";

        foreach ($jsonIt as $value) {
          echo $value["title"];
          //echo '<p>'.$value["paragraph"].'</p>';
        }
       ?>
       <p>Hej igen</p>
     </main>

   </body>
 </html>
