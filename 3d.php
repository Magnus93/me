<?php
  $jsondata = file_get_contents("3d_portfolio.json");
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
       <div class="container">
         <div class="imgContainer">
            <p>Here is an image or Video</p>
         </div>
         <div class="infoContainer">
           <div class="titleContainer">
             <h1>This is a title</h1>
           </div>
            <p>This is some info</p>
         </div>
       </div>
     </main>
   </body>
 </html>
