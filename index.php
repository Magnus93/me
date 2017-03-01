<?php
  $jsondataNav = file_get_contents("data/nav_info.json");
  $jsonNav = json_decode($jsondataNav, true);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Magnus Gustafsson</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/home.css">
    <script type="text/javascript" src="data/nav_info.json"></script>
    <script type="text/javascript" src="data/home_info.json"></script>
    <script type="text/javascript" src="js/make_home.js"></script>
    <script type="text/javascript">
      docLoaded(indexIsLoaded);
    </script>
  </head>
  <body>
    <?php
      $currentPage = "home";
      include('navigation.php');
    ?>

  </body>
</html>
