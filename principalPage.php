<?php include 'template/header.php'; ?>

<div class="container mt-5 scale-up-center" style="margin-bottom: 100px;">
    <div class="row">

        <!-- ? Alerts -->
        <?php if (isset($_GET['message']) && $_GET['message'] == 'successLogin') { ?>
            <script>
                    window.onload = function alertSuccess() {
                        swal({
                            title: "Inicio de sesión exitoso",
                            text: "Ahora puedes acceder a tu cuenta",
                            icon: "success",
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 1000
                        });
                    }
                </script>
        <?php } ?>

        <!-- ? Alerts -->

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Eventos</h5>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Día</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Semana</th>
                            <th scope="col">Mes</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Charla sobre php</td>
                            <td>09/06/2022</td>
                            <td>Jueves</td>
                            <td>8:00 AM</td>
                            <td>Semana 1</td>
                            <td>Junio</td>
                            <td>
                                <a href="" class="btn btn-custom-primary">Registrarme</a>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">2</th>
                            <td>Charla sobre Angular</td>
                            <td>09/06/2022</td>
                            <td>Viernes</td>
                            <td>8:00 AM</td>
                            <td>Semana 2</td>
                            <td>Junio</td>
                            <td>
                                <a href="" class="btn btn-custom-primary">Registrarme</a>
                            </td>
                        </tr>


                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php'; ?>