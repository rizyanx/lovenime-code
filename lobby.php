<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta name="description" content="Lovenime Code is a project created by Rizyanx, the Lovenime Project is a website for fun and is very suitable if the person visiting the website is in love with someone, because the Lovenime Project website is a website that contains elements of romance with an anime theme." />
      <meta name="keywords" content="Anime, Love, Fun Website." />
      <meta name="author" content="Rizyanx" />
      <link rel="stylesheet" type="text/css" href="css/lobby.css" />
      <link rel="icon" type="image/png" href="img/icon.png" />
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@800&display=swap" rel="stylesheet">
      <title> HI ^_^ </title>
   </head>
   <body>
      <div class="container">
         <div class="limiter-box">
            <div class="main-box">
               <div class="text-post">
                  <span>
                     
                     <?php
                     $nm = $_POST['name'];
                     echo "Hi " . $nm;
                     ?>

                  </span>
               </div>
               <div class="button-post">
                  <input type="submit" title="<?php $nm = $_POST['name']; echo "Please enter " . $nm; ?>" value="CLICK HERE" />
               </div>
            </div>
         </div>
      </div>
   </body>
</html>