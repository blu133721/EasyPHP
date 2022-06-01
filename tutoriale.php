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

<ul>
  <li><a href="primultutorial.php">Primul script in HTML.</a></li>
  <li><a href="primultutorial.php">Primul script in HTML.</a></li>
</ul>
<body>

<styLe>

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

/* Change the link color on hover */
li a:hover {
  background-color: #555;
  color: white;
}
</style>


</html>
</body>