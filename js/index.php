<!DOCTYPE html>
<html>
<head>
	<title>21</title>
</head>
<?php
	include_once 'header.php';
?>
<?php
    if (isset($_SESSION["useruid"])) {
      echo "<p>Salut! " . $_SESSION["useruid"] . "</p>";
    }
  ?>
<body>
</body>
</html>