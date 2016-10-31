<?php
if (!isset($card_title))
  $card_title = "";
if (!isset($card_img))
  $card_img = "";
if (!isset($card_desc))
  $card_desc = "";
?>

<div class="panel panel-default">
  <div class="panel-heading">
    <img class="img-responsive" src= <?php echo '"' . $card_img . '"'; ?> />
  </div>
  <div class="panel-body">
    <h3> <?php echo $card_title; ?>  </h3>
    <p> <?php echo $card_desc; ?> </p>
    <button class="btn btn-default center-block"> More </button>
  </div>
</div> <!-- panel -->
