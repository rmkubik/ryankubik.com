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
      <?php
        
      ?>
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
    </div>
  </body>
</html>
