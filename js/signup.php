<?php
  include_once 'header.php';
?>

<section class="signup-form">
  <h1>Sign Up</h1>
  <div class="signup-form-form">
  <form action="includes/signup.inc.php" method="post">
    <input type="text" name="name" placeholder="Full name">
    <input type="email" name="name" placeholder="Email">
    <input type="text" name="uid" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <input type="password" name="pwdrepeat" placeholder="Repeat password...">
    <button type="submit" name="submit">Sign Up</button>
  </form>
</div>
</section>

