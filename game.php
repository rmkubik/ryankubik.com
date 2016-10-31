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
    <div class="container">
      <h1> Game Name </h1>
        <div class="row">
          <div class="col-sm-9">
            <div id="screenshot_slider" class="carousel slide" data-ride="carousel" data-interval="false">
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="/images/pokemon/gameplay.png" alt="">
                  <div class="carousel-caption">
                  </div>
                </div>
                <div class="item">
                  <img src="/images/pokemon/gameplay.png" alt="">
                  <div class="carousel-caption">
                  </div>
                </div>
                <div class="item">
                  <img src="/images/pokemon/gameplay.png" alt="">
                  <div class="carousel-caption">
                  </div>
                </div>
              </div>

            <a class="left carousel-control" href="#screenshot_slider" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#screenshot_slider" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            </div>
          </div>
          <div class="col-sm-3">
            <ol class="screenshot_list">
              <li data-target="#screenshot_slider" data-slide-to="0" class="active">
                <img src="/images/pokemon/gameplay.png" class="img-responsive"/>
              </li>
              <li data-target="#screenshot_slider" data-slide-to="1" class="">
                <img src="/images/pokemon/gameplay.png" class="img-responsive"/>
              </li>
              <li data-target="#screenshot_slider" data-slide-to="2" class="">
                <img src="/images/pokemon/gameplay.png" class="img-responsive"/>
              </li>
            </ol>
          </div>
      </div>
    </div>
  </body>
</html>
