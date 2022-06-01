
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logheaza-te</title>
    <link rel="stylesheet" href="login-style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="background">
            <div class="text">
                <h1>Logheaza-te</h1>
                <p>Nu ai cont? <a href="signup.php">Inregistreaza-te</a></p>
            </div>
            <div class="box">
            <form action="login.inc.php" method="post">
    <input type="text" name="uid" placeholder="Username/Email">
    <input type="password" name="pwd" placeholder="Parola">
    <button type="submit" name="submit">Logheaza-te</button>
  </form>
            </div>
        </div>
    </main>
</body>
</html>
<?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo '<p>n ai scris bine</p>';
    }
    else if ($_GET["error"] == "wronglogin") {
      echo '<p>Invalid login</p>';
    }
  }
?>
</section>

