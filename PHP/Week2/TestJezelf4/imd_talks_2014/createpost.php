
<?php
session_start();
if( $_SESSION['loggedin'] == "yes" ) {
	//WELCOME
} else {
	header('Location: index.php');

}


?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IMD Talks</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/twitter.css">
	<style>


	</style>

</head>
<body>

	<nav id="hiddennav">
		<a href="logout.php"Logout>Logout</a>
	</nav>

	<div id="container">
	<section id="newpost">
		<form action="" method="post">
			<label for="post">Welcome to IMD-talks <br> Find pout what other IMD'ers are building around you.</label>



		</form>
	</section>






	</div>

</body>
</html>