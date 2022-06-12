<?php include 'template/header.php'; ?>

<div class="container scale-up-center" style="margin-bottom: 100px;">
    <div class="row justify-content-center m-5">
        <div class="col-md-6 mt-5">

            <!-- ? Alerts -->
            <?php if (isset($_GET['message']) && $_GET['message'] == 'success') { ?>

                <script>
                    window.onload = function alertSuccess() {
                        swal({
                            title: "Registro exitoso",
                            text: "Ahora puedes iniciar sesión",
                            icon: "success",
                            button: "Ok",
                        });
                    }
                </script>
            <?php } ?>

            <?php if (isset($_GET['message']) && $_GET['message'] == 'errorLogin') { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    El usuario o contraseña son incorrectos.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>

            <!-- /Alerts -->

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Iniciar sesión</h5>
                    <form action="functions/user/login_usuario.php" method="POST">
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input required type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingresar email" name="email">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Contraseña</label>
                            <input required type="password" class="form-control" id="password" placeholder="Contraseña" name="password">
                        </div>

                        <div class="row">
                            <input type="hidden" name="oculto" value="1">
                            <input type="submit" class="btn btn-custom-primary" value="Iniciar sesión">
                        </div>

                        <!-- No tienes cuenta? -->
                        <div class="row">
                            <a class="text-primary text-center mt-2">¿No tienes cuenta? Regístrate</a>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!--     include_once "model/conexion.php";
    $sentencia = $bd->query("SELECT * FROM users where email = .'".$_POST['email']."'");
    $users = $sentencia->fetchAll(PDO::FETCH_OBJ);
    print_r($users); -->




<?php include 'template/footer.php'; ?>