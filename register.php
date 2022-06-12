<?php include 'template/header.php'; ?>

<div class="container scale-up-center" style="margin-bottom: 100px;">
    <div class="row justify-content-center m-5">
        <div class="col-md-6 mt-5">



            <!-- ? Alerts -->
            <?php if (isset($_GET['message']) && $_GET['message'] == 'error1') { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Debes ingresar todos los datos
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>

            <?php if (isset($_GET['message']) && $_GET['message'] == 'error2') { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Opps! Las contraseñas no coinciden
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>

            <?php if (isset($_GET['message']) && $_GET['message'] == 'errorRegistro') { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Opps! Hubo un error en el registro, intentalo de nuevo
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
            <!-- ? /Alerts -->


            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Registrarse</h5>
                    <form action="functions/user/registrar_usuario.php" method="POST">

                        <div class="form-group mb-3">
                            <label for="names">Nombres</label>
                            <input required type="text" class="form-control" id="names" placeholder="Ingresar nombres" name="names">
                        </div>

                        <div class="form-group mb-3">
                            <label for="last_names">Apellidos</label>
                            <input required type="text" class="form-control" id="last_names" placeholder="Ingresar apellidos" name="last_names">
                        </div>

                        <div class="form-group mb-3">
                            <label for="age">Edad</label>
                            <input required type="number" class="form-control" id="age" placeholder="Ingresar edad" name="age">
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input required type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingresar email" name="email">
                        </div>

                        <div class="form-group mb-3">
                            <label for="password">Contraseña</label>
                            <input required type="password" class="form-control" id="password" placeholder="Contraseña" name="password">
                        </div>

                        <div class="form-group mb-3">
                            <label for="password_confirm">Confirmar contraseña</label>
                            <input required type="password" class="form-control" id="password_confirm" placeholder="Confirmar contraseña" name="password_confirm">
                        </div>

                        <div class="row">
                            <input type="hidden" name="oculto" value="1">
                            <input type="submit" class="btn btn-custom-primary" value="Registrarse">
                        </div>

                        <!-- No tienes cuenta? -->
                        <div class="row">
                            <a href="index.php" class="text-primary text-center mt-2">¿Ya tienes cuenta? Iniciar sesión</a>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php'; ?>