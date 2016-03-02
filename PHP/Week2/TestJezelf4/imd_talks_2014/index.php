<?php
function canLogin( $p_username, $p_password, $p_fullname)
{
	if ( !empty($p_username && $p_password && $p_fullname)) {
		return true;
	} else {
		return false;
	}
};

if ( !empty( $_POST ) ) {
	$username = $_POST['email'];
	$password = $_POST['password'];
	$fullname = $_POST['name'];

	if ( canLogin($username, $password, $fullname)  ) {
		session_start();
		$_SESSION['loggedin'] = "yes";

		header('Location: createpost.php');
	}
}
?>






<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IMD Talks</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/twitter.css">
	
</head>
<body>
<?php if(isset($_SESSION['loggedin'])): ?>
	<nav>

			<a href="logout.php">Logout</a>


	</nav>
<?php else: ?>

<?php endif; ?>

	<header>
		<h1>Welcome to IMD-Talks</h1>
		<h2>Find out what other IMD'ers are building around you.</h2>
	</header>
	
	<div id="rightside">	

	
	<section id="signup">
	
		<h2>New to IMD-Talks? <span>Sign Up</span></h2>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="text" name="name" placeholder="Full name" />
		<input type="email" name="email" placeholder="Email" />
		<input type="password" name="password" placeholder="Password" />
		<input type="submit" name="btnSignup" value="Sign up for IMD Talks" />
		</form>
		
	</section>
	</div>	
	
</body>
</html>