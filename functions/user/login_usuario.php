<?php

$email = $_POST['email'];
$password = $_POST['password'];

session_start();
$_SESSION['email'] = $email;



$conexion = mysqli_connect("localhost", "root", "", "events");

$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conexion, $query);

$rows = mysqli_num_rows($result);

if ($rows > 0) {
    header("Location: ../../principalPage.php?message=successLogin");
} else {
    header("Location: ../../index.php?message=errorLogin");
}

mysqli_close($conexion);
