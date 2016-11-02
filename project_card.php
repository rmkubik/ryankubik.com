<?php
if (!isset($card_title) || $card_title === "")
  $card_title = "";
if (!isset($card_img) || $card_img === "")
  $card_img = "assets/images/placeholder.png";
if (!isset($card_desc) || $card_desc === "")
  $card_desc = "";
if (!isset($card_href) || $card_href === "")
  $card_href = "";
if (!isset($card_label_text) || $card_label_text === "")
  $card_label_text = "";
if (!isset($card_label_color) || $card_label_color === "")
  $card_label_color = "default";
  //color options: default, primary, success, info, warning, danger
?>

<div class="panel panel-default card-project">
  <a href= <?php echo '"' . $card_href . '"'; ?> >
    <div class="panel-heading">
      <img class="img-responsive" src= <?php echo '"' . $card_img . '"'; ?>/>
      <?php
        if($card_label_text !== "")
          echo '<span class="label label-' . $card_label_color . ' project-label">' . $card_label_text . '</span>';
      ?>
    </div>
    <div class="panel-body">
      <h3> <?php echo $card_title; ?>  </h3>
      <p> <?php echo $card_desc; ?> </p>
    </div>
  </a>
</div>
