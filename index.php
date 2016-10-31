<!DOCTYPE HTML>
<html>
  <head>
    <?php
      $title = "Ryan Kubik";
      include("header.php");
      include("content.php");
    ?>
  </head>
  <body>
    <?php
      $home_active = "active";
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
            $card_img = "assets/images/pokemon/gameplay.png";
            $card_desc = $concentration_summary;
            include("project_card.php");
          ?>
        </div> <!-- col -->
        <div class="col-sm-4">
          <?php
            $card_title = "Platformer";
            $card_img = "assets/images/platformer/gameplay.png";
            $card_desc = $concentration_summary;
            include("project_card.php");
          ?>
        </div> <!-- col -->
        <div class="col-sm-4">
          <?php
            $card_title = "Board Game";
            $card_img = "assets/images/LWJGLTD/gameplay.png";
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
            $card_img = "assets/images/calendar/calendar_main.png";
            $card_desc = $concentration_summary;
            include("project_card.php");
          ?>
        </div> <!-- col -->
        <div class="col-sm-4">
          <?php
            $card_title = "Map";
            $card_img = "assets/images/map/map_main.png";
            $card_desc = $concentration_summary;
            include("project_card.php");
          ?>
        </div> <!-- col -->
        <div class="col-sm-4">
          <?php
            $card_title = "Painter";
            $card_img = "assets/images/calendar/calendar_video.png";
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
            $card_img = "assets/images/vectors/Vectors-11.svg";
            $card_desc = $concentration_summary;
            include("project_card.php");
          ?>
        </div> <!-- col -->
        <div class="col-sm-4">
          <?php
            $card_title = "Pixel Art";
            $card_img = "assets/images/pixels/mar20_64.png";
            $card_desc = $concentration_summary;
            include("project_card.php");
          ?>
        </div> <!-- col -->
        <div class="col-sm-4">
          <?php
            $card_title = "Vector Art";
            $card_img = "assets/images/vectors/Vectors-05.svg";
            $card_desc = $concentration_summary;
            include("project_card.php");
          ?>
        </div> <!-- col -->
      </div> <!-- game dev row -->
    </div>
  </body>
</html>
