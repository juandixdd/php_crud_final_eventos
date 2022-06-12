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
            <!-- /Alerts -->

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Iniciar sesión</h5>
                    <form action="principalPage.php">
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingresar email">

                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" placeholder="Contraseña">
                        </div>

                        <div class="row">
                            <button type="submit" class="btn btn-custom-primary">Iniciar Sesión</button>
                        </div>

                        <!-- No tienes cuenta? -->
                        <div class="row">
                            <a href="register.php" class="text-primary text-center mt-2">¿No tienes cuenta? Regístrate</a>
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