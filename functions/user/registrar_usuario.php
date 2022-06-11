<?php

print_r($_POST);

if (
    empty($_POST["oculto"]) ||
    empty($_POST["names"]) ||
    empty($_POST["last_names"]) ||
    empty($_POST["age"]) ||
    empty($_POST["email"]) ||
    empty($_POST["password"]) ||
    empty($_POST["password_confirm"])
) {

    header("Location: ../../register.php?error=1");
}
if (
    $_POST["password"] != $_POST["password_confirm"]
) {
    header("Location: ../../register.php?error=2");
}
