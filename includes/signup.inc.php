<?php

if (isset($_POST["submit"])) {
	echo 'merge!';
}
else {
	header("location: ../signup.php");
}