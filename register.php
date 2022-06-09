<?php include 'template/header.php'; ?>

<div class="container">
    <div class="row justify-content-center m-5">
        <div class="col-md-6 mt-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Registrarse</h5>
                    <form action="">

                        <div class="form-group mb-3">
                            <label for="names">Nombres</label>
                            <input type="text" class="form-control" id="names" placeholder="Ingresar nombres">
                        </div>

                        <div class="form-group mb-3">
                            <label for="lastnames">Apellidos</label>
                            <input type="text" class="form-control" id="lastnames" placeholder="Ingresar apellidos">
                        </div>

                        <div class="form-group mb-3">
                            <label for="age">Edad</label>
                            <input type="number" class="form-control" id="age" placeholder="Ingresar edad">
                        </div>
                           
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingresar email">
                        </div>

                        <div class="form-group mb-3">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" placeholder="Contraseña">
                        </div>

                        <div class="form-group mb-3">
                            <label for="password">Confirmar contraseña</label>
                            <input type="password" class="form-control" id="password" placeholder="Confirmar contraseña">
                        </div>

                        <div class="row">
                            <button type="submit" class="btn btn-custom-primary  ">Registrarse</button>
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