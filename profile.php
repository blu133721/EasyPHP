<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>

<?php
  if (isset($_SESSION["useruid"])) {
    echo '<p>Tu ai numele ' . $_SESSION["useruid"]. "</p>";
  }
  if (isset($_SESSION["userid"])) {
    echo '<p>Tu ai id-ul :  ' . $_SESSION["userid"]. " in baza de date. </p>";
		echo '<a href="https://localhost/learnphp/logout.inc.php">Logout</a>';	
  }
 if (!isset($_SESSION["useruid"])) {
        echo '<p>Nu esti logat';
      }
?> 

</body>
</html>