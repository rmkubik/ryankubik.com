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
          $col_count = 0;
          for ($proj = 0; $proj < count($projects_data[$i]["projects"]); $proj++) {
            if ($col_count === 3 || $col_count === 0) {
              echo '<div class="row">';
              if ($col_count === 0)
                $col_count++;
            }
            echo '<div class="col-sm-4">';
            $card_title = $projects_data[$i]["projects"][$proj]["name"];
            $card_img = $projects_data[$i]["projects"][$proj]["img"];
            $card_desc = $projects_data[$i]["projects"][$proj]["desc"];
            $card_href = $projects_data[$i]["projects"][$proj]["href"];
            $card_label_text = $projects_data[$i]["projects"][$proj]["label"]["text"];
            $card_label_color = $projects_data[$i]["projects"][$proj]["label"]["color"];
            include("project_card.php");
            echo '</div>';
            if ($col_count === 3 || $col_count === 0) {
              echo '</div>';
              $col_count = 0;
            }
            $col_count++;
          }
          if ($col_count !== 1)
            echo '</div>';
        }
      ?>
    </div>
  </body>
</html>
