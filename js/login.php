<?php
  include_once 'header.php';
?>

<section class="signup-form">
  <h1>Login</h1>
  <div class="signup-form-form">
  <form action="includes/login.inc.php" method="post">
    <input type="text" name="name" placeholder="Username/Email">
    <input type="password" name="pwd" placeholder="Password">
    <button type="submit" name="submit">Log in</button>
  </form>
</div>
</section>

