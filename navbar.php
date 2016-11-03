<?php
if (!isset($home_active))
  $home_active = "";
?>

<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-brand">
      Ryan Kubik
    </div>
    <ul class="nav navbar-nav">
      <li class="<?php echo $home_active; ?>"><a href="/">Home</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="https://law5guy.itch.io">Itch.io</a></li>
      <li><a href="https://github.com/rmkubik">Github</a></li>
      <li><a href="https://www.linkedin.com/in/ryankubik">LinkedIn</a></li>
      <li><a href="https://twitter.com/ryrykubes">Twitter</a></li>
    </ul>
  </div>
</nav>
