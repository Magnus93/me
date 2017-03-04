<?php

echo "<nav>";
    echo '<h1 class="nav"><a href='.$jsonNav["homeLink"]["link"].' class="nav">'.$jsonNav["homeLink"]["name"].'</a></h1>';
  echo '<ul id="pages">';
    foreach ($jsonNav["navLinks"] as $value) {
      if ($value["name"] == $currentPage) {
        echo '<li id="selectedPage">';
          echo '<a href="'.$value["link"].'">'.$value["name"].'</a>';
        echo '</li>';
      } else {
        echo '<li><a href="'.$value["link"].'">'.$value["name"].'</a></li>';
      }


    }
  echo '</ul>';
echo '</nav>';

 ?>
