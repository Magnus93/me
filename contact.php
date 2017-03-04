<?php
  $jsondata = file_get_contents("data/home.json");
  $json = json_decode($jsondata, true);
  $jsondataNav = file_get_contents("data/nav.json");
  $jsonNav = json_decode($jsondataNav, true);
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/contact.css">
    <title>Magnus Gustafsson - Contact</title>
  </head>
  <body>
    <?php
      $currentPage = "Kontakt";
      include('navigation.php');
     ?>
    <main>
      <?php
        $iconPath = "img/home/";
        echo '<table>';
        foreach ($json["contactInfo"] as $value) {
          echo '<tr>';
            echo '<td class="icon">';
              echo '<img src='.$iconPath.$value["icon"].'>';
            echo '</td>';
            echo '<td class="info">';
            if ($value["link"]) {
              echo '<a href='.$value["link"].'>'.$value["info"].'</a>';
            } else {
              echo '<p>'.$value["info"].'</p>';
            }
            echo '</td>';
          echo '</tr>';
        }
        echo '</table>'
       ?>
      </div>
    </main>
  </body>
</html>
