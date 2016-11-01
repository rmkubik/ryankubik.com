<!DOCTYPE HTML>
<html>
  <head>
    <?php
      $title = "Ryan Kubik";
      include("header.php");
    ?>
  </head>
  <body>
    <?php
      $home_active = "active";
      include("navbar.php");
    ?>
    <div class="container">
      <?php
        $string = file_get_contents("assets/data/projects.json");
        $projects_data = json_decode($string, true);
        for ($i = 0; $i < count($projects_data); $i++) {
          echo '<h2>' . $projects_data[$i]["name"] . '</h2>';
          echo '<div class="row">';
          for ($proj = 0; $proj < count($projects_data[$i]["projects"]); $proj++) {
            echo '<div class="col-sm-4">';
            $card_title = $projects_data[$i]["projects"][$proj]["name"];
            $card_img = $projects_data[$i]["projects"][$proj]["img"];
            $card_desc = $projects_data[$i]["projects"][$proj]["desc"];
            $card_href = $projects_data[$i]["projects"][$proj]["href"];
            include("project_card.php");
            echo '</div>';
          }
          echo '</div>';

        }
      ?>
    </div>
  </body>
</html>
