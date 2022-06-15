<?php

include "../../model/conexion.php";

session_start();

$semana = $_POST['semana'];
$dia = $_POST['dia'];
$hora = $_POST['hora'];
$id_user = $_SESSION['user']['id'];
$id_event = $_POST['id_event'];

/* Se valida si la relación ya existe */
$query = $bd->prepare("SELECT * FROM usuario_evento WHERE id_user = ? AND id_event = ? AND semana = ?");
$result = $query->execute([$id_user, $id_event, $semana]); 
$usuario_evento = $query->fetchAll(PDO::FETCH_OBJ);

/* Se valida que solo se puedan inscribir 100 personas por semana */
$query = $bd->prepare("SELECT COUNT(u.id_user) as 'cantidad' FROM usuario_evento u WHERE id_user = ? AND semana = ?");
$result = $query->execute([$id_user, $semana]);
$cantidad = $query->fetchAll(PDO::FETCH_OBJ);

if(count($usuario_evento) > 0) {
    header("Location: ../../principalPage.php?message=error4");
    exit;
    
} else if($cantidad[0]->cantidad > 100){
    header("Location: ../../principalPage.php?message=error5");
    exit;
}

else{
    $query = $bd->prepare("INSERT INTO usuario_evento (id_user, id_event, semana, dia, hora) VALUES (?, ?, ?, ?, ?);");
    $result = $query->execute([$id_user, $id_event, $semana, $dia, $hora]);
    if ($result === true) {
        header("Location: ../../principalPage.php?message=success");
    } else {
        header("Location: ../../principalPage.php?message=errorRegistro");
        exit;
    }
}

