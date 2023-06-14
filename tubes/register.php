<?php
require 'function.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
        alert('user baru berhasil ditambahkan!');
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link rel="stylesheet" href="/pw2023_223040147/tubes/css/login.css">
    <link rel="stylesheet" href="">
</head>
<body>
  <div class="wrapper">
        <h1>sign up</h1>
        <form action="" method="post">
            <input type="text" placeholder="Username" name="username" required>
            <input type="password" placeholder="Password" name="password" required>
            <input type="password" placeholder="Re-enter Password" name="password2" required>
            <input type="submit" name="register" value="Sign up">
        </form>
        <button> <a href="index.php">back to home</a></button>
        <div class="member">
            Already a member? <a href="login.php"> Login here</a>
        </div>
  </div>
</body>


    <!-- Script  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>


</html>