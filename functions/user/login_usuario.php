<?php
include "../../model/conexion.php";

$userQuery = $bd->prepare("SELECT * FROM users where email = ? AND password = ?");
$result = $userQuery->execute([$_POST['email'], $_POST['password']]);
$user = $userQuery->fetchAll(PDO::FETCH_OBJ);

if ($result === true) {
    if (count($user) > 0) {
        echo "
        <script>
            localStorage.setItem('user_id', '" . $user[0]->id . "');
        </script>";

        $loginQuery = $bd->prepare("UPDATE users SET isLogged = true WHERE id = ?");
        $loginResult = $loginQuery->execute([$user[0]->id]);



        header("Location: ../../principalPage.php?message=successLogin");
    } else {
        header("Location: ../../index.php?message=errorLogin");
    }
}
