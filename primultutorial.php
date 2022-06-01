<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lista de tutoriale</title>
</head>

<?php
    if (isset($_SESSION["useruid"])) {
      echo "<a href='tutoriale.php'> Tutoriale </a>";
      echo "<a href='logout.inc.php'> Log out</a>";;
    }
    else {
      echo "<a href='signup.php'>Sign-up </a>";
      echo "<a href='login.php'>Login </a>";
    }
  ?>

<body>

<styLe>

</style>


</html>
</body>