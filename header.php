<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
	body {
		background-color: #080C31;
		font-family: 'Ubuntu', sans-serif;
	}

	.titlu{
		color: white;
		font-size: 32px;
		font-weight: 300;
		text-align: center;
		top: 280px;
		position: absolute;
		right: 49%;
	}

	.descriere {
		color: white;
		font-size: 15px;
		position: absolute;
		top: 380px;
		right: 47%;
	}

	.nav {
	  background-color: transparent;
	  overflow: hidden;
	}

	.nav a {
	  float: left;
	  color: #f2f2f2;
	  text-align: center;
	  padding: 14px 16px;
	  text-decoration: none;
	  font-size: 17px;
	}

	.nav a:hover {
	  background-color: #ddd;
	  color: black;
	  transition: 0.5s;
	}

	.nav a.active {
	  background-color: transparent;
	  color: white;
	  transition: 0.5s;
	}

	.button {
	  background-color: #6699ff;
	  border: none;
	  color: white;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 20px;
	  margin: 2px 1px;
	  cursor: pointer;
	  top: 410px;
	  right: 50.1%;
	  position: absolute;
	  padding: 10px;
    border-radius: 5px;	
    transition: 3s;
}


.button:hover {
    background-color: white;
    color: black;
}

@media screen and (max-width: 800px) {
	.titlu{
		color: white;
		font-size: 20px;
		font-weight: 300;
		text-align: center;
		top: 280px;
		position: absolute;
		right: 38%;
	}
	.descriere {
		color: white;
		font-size: 10px;
		position: absolute;
		top: 360px;
		right: 34%;
		left: 10%;
	}
}


@media screen and (max-width: 1024px) {
		.titlu{
		color: white;
		font-size: 30px;
		font-weight: 300;
		text-align: center;
		top: 280px;
		position: absolute;
		right: 28%;
	}
	.descriere {
		color: white;
		font-size: 15px;
		position: absolute;
		top: 355px;
		right: 34%;
		left: 10%;
	}
}

@media screen and (max-width: 1366px) {
	.titlu{
		color: white;
		font-size: 45px;
		font-weight: 300;
		text-align: center;
		top: 280px;
		position: absolute;
		right: 28%;
	}
	.descriere {
		color: white;
		font-size: 17px;
		position: absolute;
		top: 355px;
		right: 34%;
		left: 10%;
	}
	@media screen and (max-width: 720px) {
		.titlu{
		color: white;
		font-size: 25px;
		font-weight: 300;
		text-align: center;
		top: 280px;
		position: absolute;
		right: 25%;
	}
	.descriere {
		color: white;
		font-size: 13px;
		position: absolute;
		top: 355px;
		right: 34%;
		left: 10%;
	}
}

	</style>
<body>
	<div class="topnav">

</div>


<p class="titlu">Site TIC!</p>
<p class="descriere">Site facut in HTML, PHP,  CSS!</p>

<div class="nav">
  <a class="active" href="https://localhost/learnphp/login.php">Login</a>
   <a href="https://localhost/learnphp/calculator.php">Calculator</a>
   <a href="https://localhost/learnphp/profile.php">Info</a>
</div>


<a href="https://localhost/learnphp/signup.php" class="block">
<button class="button button2">Register</button>
</a>

</body>
</html>