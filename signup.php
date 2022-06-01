<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inregistreaza-te</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="background">
            <div class="text">
                <h1>Inregistreaza-te</h1>
                <p>Ai deja un cont? <a href="login.php">Login</a></p>
            </div>
            <div class="box">
            <form action="signup.inc.php" method="post">
    <input type="text" name="name" placeholder="Numele">
    <input type="text" name="email" placeholder="Email-ul">
    <input type="text" name="uid" placeholder="Username-ul">
    <input type="password" name="pwd" placeholder="Parola">
    <input type="password" name="pwdrepeat" placeholder="Repeta parola...">
    <button type="submit" name="submit">Inregistreaza-te</button>
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
    else if ($_GET["error"] == "invalidUid") {
      echo '<p>nu merge username-u pe care l ai pus</p>';

    }
    else if ($_GET["error"] == "invalidemail") {
      echo '<p>nu merge email-u pe care l ai pus</p>';

    }
    else if ($_GET["error"] == "passwordsdontmatch") {
      echo '<p>Parolele nu se potrivesc!</p>';

    }
    else if ($_GET["error"] == "stmtfailed") {
      echo '<p>Something went wrong!</p>';

    }
    else if ($_GET["error"] == "usernamewastaken") {
      echo '<p>Alege alt username!</p>';

    }
    else if ($_GET["error"] == "none") {
      echo '<p>Te-ai inregistrat cu succes!</p>';

    }
  }
?>
</section>

