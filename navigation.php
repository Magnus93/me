<?php

echo "<nav>";
    echo '<h1 class="nav"><a href='.$jsonNav["homeLink"]["link"].' class="nav">'.$jsonNav["homeLink"]["name"].'</a></h1>';
  echo '<ul class="pages" id="pages">';
    foreach ($jsonNav["navLinks"] as $value) {
      if ($value["name"] == $currentPage) {
        echo '<li id="selectedPage">';
          echo '<a href="'.$value["link"].'">'.$value["name"].'</a>';
        echo '</li>';
      } else {
        echo '<li><a href="'.$value["link"].'">'.$value["name"].'</a></li>';
      }
    }
    echo '<li class="burger">';
      echo '<a href=javascript:void(0); onclick=responsiveNav();>';
        echo '&#9776;';
      echo '</a>';
    echo '</li>';
  echo '</ul>';
echo '</nav>';
 ?>

 <script>
   function responsiveNav() {
     var pages = document.getElementById("pages");
     if (pages.className === "pages") {
       pages.className = "responsive";
     } else {
       pages.className = "pages";
     }
   }
 </script>
