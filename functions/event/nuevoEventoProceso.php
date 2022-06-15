<?php

include "../../model/conexion.php";

session_start();

$name = $_POST['name'];
$description = $_POST['description'];
$month = $_POST['month'];


$query = $bd->prepare("INSERT INTO events (name, description, month) VALUES (?, ?, ?);");
$result = $query->execute([$name, $description, $month]);
if ($result === true) {
    header("Location: ../../principalPage.php?message=successNewEvent");
} else {
    header("Location: ../../principalPage.php?message=errorRegistro");
    exit;
}
