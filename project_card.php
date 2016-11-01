<?php
if (!isset($card_title) || $card_title === "")
  $card_title = "";
if (!isset($card_img) || $card_img === "")
  $card_img = "assets/images/placeholder.png";
if (!isset($card_desc) || $card_desc === "")
  $card_desc = "";
if (!isset($card_href) || $card_href === "")
  $card_href = "";
?>

<div class="panel panel-default card-project">
  <a href= <?php echo '"' . $card_href . '"'; ?> >
    <div class="panel-heading">
      <img class="img-responsive" src= <?php echo '"' . $card_img . '"'; ?> />
    </div>
    <div class="panel-body">
      <h3> <?php echo $card_title; ?>  </h3>
      <p> <?php echo $card_desc; ?> </p>
    </div>
  </a>
</div>
