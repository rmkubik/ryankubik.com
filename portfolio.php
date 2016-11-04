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
          if ($projects_data[$i]["id"] === $_GET["cat"]) {
            for ($proj = 0; $proj < count($projects_data[$i]["projects"]); $proj++) {
              if ($projects_data[$i]["projects"][$proj]["id"] === $_GET["proj"]) {
                $col_count = 0;
                for ($item = 0; $item < count($projects_data[$i]["projects"][$proj]["items"]); $item++) {
                  if ($col_count === 4 || $col_count === 0) {
                    echo '<div class="row">';
                    if ($col_count === 0)
                      $col_count++;
                  }
                  echo '<div class="col-sm-3">';
                  echo '<a class="thumbnail" data-target="#portfolio-modal" data-toggle="modal" href="#portfolio-modal" data-name="';
                  echo $projects_data[$i]["projects"][$proj]["items"][$item]["name"] . '">';
                  echo '<img src="' . $projects_data[$i]["projects"][$proj]["items"][$item]["href"] . '"/>';
                  echo '</a>';
                  echo '</div>';
                  if ($col_count === 4 || $col_count === 0) {
                    echo '</div>';
                    $col_count = 0;
                  }
                  $col_count++;
                }
                if ($col_count !== 1)
                  echo '</div>';
              }
            }
          }
        }
        include("portfolio_modal.php");
      ?>
    </div>
  </body>
</html>
