<?php
session_start();
require 'function.php';

if (isset($_SESSION["login"])) {
	header("Location: index.php");
	exit;
} else if (isset($_SESSION["login2"])) {
	header("Location: admin/admin.php");
	exit;
}

if (isset($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

	// Cek username
	if (mysqli_num_rows($result) === 1) {
		// cek password
		$row = mysqli_fetch_assoc($result);
		//set session
		$_SESSION["submit"]= true;
		$_SESSION["username"]= $username;
		$_SESSION["role"]= $row['role'];
		if (password_verify($password, $row["password"])) {
			if ($row["role"] == "user") {
				// set session
				$_SESSION["login"] = true;

				header("Location: index.php");
				exit;
			} else if ($row["role"] == "admin") {
				// set session
				$_SESSION["login2"] = true;

				header("Location: admin/admin.php");
				exit;
			}
		}
	}

	$error = true;
}

// Logout
if (isset($_GET["logout"])) {
	session_unset();
	session_destroy();
	header("Location: index.php");
	exit;
}
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="/pw2023_223040147/tubes/css/login.css">
	<link rel="stylesheet" href="">
</head>

<body>
	<div class="wrapper">
		<h1>Login</h1>
		<?php if (isset($error)) : ?>
			<p style="color: red;">Username/password salah</p>
		<?php endif; ?>
		<form action="" method="post">
			<input type="text" placeholder="Username" name="username">
			<input type="password" placeholder="Password" name="password">
			<div class="recover">
				<a href="#">Lupa password</a>
			</div>
			<button type="submit" name="login">Login</button>
		</form>
		<button><a href="index.php">Back to Home</a></button>
		<div class="member">
			Not a member? <a href="register.php">Register now</a>
		</div>
		<!-- Logout -->
		<button><a href="login.php?logout=true">Logout</a></button>
	</div>
</body>

<!-- Script  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</html>
