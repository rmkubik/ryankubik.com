<!DOCTYPE HTML>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script src="/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/js/scripts.js" type="text/javascript"></script>
    <?php
      include("../functions.php");
      include("../content.php");
    ?>
    <title>Ryan Kubik</title>
  </head>
  <body>
    <?php
      $home_class = "active";
      include("../navbar.php");
    ?>
    <div class="container">
      <div class="title-underline">
        <h2> Game Development </h2>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <img class="img-responsive" src="../images/pokemon/gameplay.png"/>
            </div>
            <div class="panel-body">
              <h3> Gotta Match 'Em All </h3>
              <p> <?php echo $concentration_summary; ?> </p>
              <button class="btn btn-default center-block"> More </button>
            </div>
          </div> <!-- panel -->
        </div> <!-- col -->
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <img class="img-responsive" src="../images/platformer/gameplay.png"/>
            </div>
            <div class="panel-body">
              <h3> Platformer </h3>
              <p> <?php echo $concentration_summary; ?> </p>
              <button class="btn btn-default"> More </button>
            </div>
          </div> <!-- panel -->
        </div> <!-- col -->
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <img class="img-responsive" src="../images/LWJGLTD/gameplay.png"/>
            </div>
            <div class="panel-body">
              <h3> Board Game </h3>
              <p> <?php echo $concentration_summary; ?> </p>
              <button class="btn btn-default"> More </button>
            </div>
          </div> <!-- panel -->
        </div> <!-- col -->
      </div> <!-- game dev row -->
      <div class="title-underline">
        <h2> Web Development </h2>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <img class="img-responsive" src="../images/calendar/calendar_main.png"/>
            </div>
            <div class="panel-body">
              <h3> Calendar </h3>
              <p> <?php echo $concentration_summary; ?> </p>
              <button class="btn btn-default center-block"> More </button>
            </div>
          </div> <!-- panel -->
        </div> <!-- col -->
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <img class="img-responsive" src="../images/map/map_main.png"/>
            </div>
            <div class="panel-body">
              <h3> Map </h3>
              <p> <?php echo $concentration_summary; ?> </p>
              <button class="btn btn-default"> More </button>
            </div>
          </div> <!-- panel -->
        </div> <!-- col -->
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <img class="img-responsive" src="../images/calendar/calendar_video.png"/>
            </div>
            <div class="panel-body">
              <h3> Painter </h3>
              <p> <?php echo $concentration_summary; ?> </p>
              <button class="btn btn-default"> More </button>
            </div>
          </div> <!-- panel -->
        </div> <!-- col -->
      </div> <!-- game dev row -->
      <div class="title-underline">
        <h2> Graphic Design </h2>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <img class="img-responsive" src="../images/vectors/Vectors-11.svg"/>
            </div>
            <div class="panel-body">
              <h3> Logos </h3>
              <p> <?php echo $concentration_summary; ?> </p>
              <button class="btn btn-default center-block"> More </button>
            </div>
          </div> <!-- panel -->
        </div> <!-- col -->
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <img class="img-responsive" src="../images/pixels/mar20_64.png"/>
            </div>
            <div class="panel-body">
              <h3> Pixel Art </h3>
              <p> <?php echo $concentration_summary; ?> </p>
              <button class="btn btn-default"> More </button>
            </div>
          </div> <!-- panel -->
        </div> <!-- col -->
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <img class="img-responsive" src="../images/vectors/Vectors-05.svg"/>
            </div>
            <div class="panel-body">
              <h3> Vector Art </h3>
              <p> <?php echo $concentration_summary; ?> </p>
              <button class="btn btn-default"> More </button>
            </div>
          </div> <!-- panel -->
        </div> <!-- col -->
      </div> <!-- game dev row -->
    </div>
  </body>
</html>
