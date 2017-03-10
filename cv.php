<?php
  $jsondataNav = file_get_contents("data/nav.json");
  $jsonNav = json_decode($jsondataNav, true);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Magnus Gustafsson - CV</title>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/cv.css">
  </head>
  <body>
    <main>
      <div>
        <iframe src="cv/CV_MagnusGustafsson.pdf">
        </iframe>
      </div>
    </main>
    <?php
      $currentPage = "CV";
      include('navigation.php');
    ?>
  </body>
</html>
