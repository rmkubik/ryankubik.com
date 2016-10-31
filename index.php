<!DOCTYPE HTML>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script src="/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/js/scripts.js" type="text/javascript"></script>
    <?php
      //include("../functions.php");
      include("content.php");
    ?>
    <title>Ryan Kubik</title>
  </head>
  <body>
    <?php
      $home_class = "active";
      include("navbar.php");
    ?>
    <div class="container">
      <div class="title-underline">
        <h2> Game Development </h2>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <?php
            $card_title = "Gotta Match 'Em All";
            $card_img = "images/pokemon/gameplay.png";
            $card_desc = $concentration_summary;
            include("project_card.php");
          ?>
        </div> <!-- col -->
        <div class="col-sm-4">
          <?php
            $card_title = "Platformer";
            $card_img = "images/platformer/gameplay.png";
            $card_desc = $concentration_summary;
            include("project_card.php");
          ?>
        </div> <!-- col -->
        <div class="col-sm-4">
          <?php
            $card_title = "Board Game";
            $card_img = "images/LWJGLTD/gameplay.png";
            $card_desc = $concentration_summary;
            include("project_card.php");
          ?>
        </div> <!-- col -->
      </div> <!-- game dev row -->
      <div class="title-underline">
        <h2> Web Development </h2>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <?php
            $card_title = "Calendar";
            $card_img = "images/calendar/calendar_main.png";
            $card_desc = $concentration_summary;
            include("project_card.php");
          ?>
        </div> <!-- col -->
        <div class="col-sm-4">
          <?php
            $card_title = "Map";
            $card_img = "images/map/map_main.png";
            $card_desc = $concentration_summary;
            include("project_card.php");
          ?>
        </div> <!-- col -->
        <div class="col-sm-4">
          <?php
            $card_title = "Painter";
            $card_img = "images/calendar/calendar_video.png";
            $card_desc = $concentration_summary;
            include("project_card.php");
          ?>
        </div> <!-- col -->
      </div> <!-- game dev row -->
      <div class="title-underline">
        <h2> Graphic Design </h2>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <?php
            $card_title = "Logos";
            $card_img = "images/vectors/Vectors-11.svg";
            $card_desc = $concentration_summary;
            include("project_card.php");
          ?>
        </div> <!-- col -->
        <div class="col-sm-4">
          <?php
            $card_title = "Pixel Art";
            $card_img = "images/pixels/mar20_64.png";
            $card_desc = $concentration_summary;
            include("project_card.php");
          ?>
        </div> <!-- col -->
        <div class="col-sm-4">
          <?php
            $card_title = "Vector Art";
            $card_img = "images/vectors/Vectors-05.svg";
            $card_desc = $concentration_summary;
            include("project_card.php");
          ?>
        </div> <!-- col -->
      </div> <!-- game dev row -->
    </div>
  </body>
</html>
