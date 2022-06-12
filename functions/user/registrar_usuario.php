<?php

/* ? Validaciones */

if (
    empty($_POST["oculto"]) ||
    empty($_POST["names"]) ||
    empty($_POST["last_names"]) ||
    empty($_POST["age"]) ||
    empty($_POST["email"]) ||
    empty($_POST["password"]) ||
    empty($_POST["password_confirm"])
) {

    header("Location: ../../register.php?message=error1");
    exit;
}
if (
    $_POST["password"] != $_POST["password_confirm"]
) {
    header("Location: ../../register.php?message=error2");
    exit;
}

include "../../model/conexion.php";
$names = $_POST["names"];
$last_names = $_POST["last_names"];
$age = $_POST["age"];
$email = $_POST["email"];
$password = $_POST["password"];

$query = $bd->prepare("INSERT INTO users (names, last_names, age, email, password) VALUES (?, ?, ?, ?, ?);");
$result = $query->execute([$names, $last_names, $age, $email, $password]);

if ($result === true) {
    header("Location: ../../index.php?message=success");
} else {
    header("Location: ../../register.php?message=errorRegistro");
    exit;
}
