<?php include 'template/header.php'; ?>

<?php
/* Se llaman los datos de la tabla events */
include_once 'model/conexion.php';
$query = $bd->query("SELECT * FROM events");
$events = $query->fetchAll(PDO::FETCH_OBJ);

?>

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

        <?php if (isset($_GET['message']) && $_GET['message'] == 'error4') { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Opps! Ya estás registrado en el evento para esa semana.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>

        <?php if (isset($_GET['message']) && $_GET['message'] == 'error5') { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Opps! Ya se terminaron los cupos disponibles.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>

        <?php if (isset($_GET['message']) && $_GET['message'] == 'success') { ?>
            <script>
                window.onload = function alertSuccess() {
                    swal({
                        title: "Te has registrado",
                        text: "Puedes seguir viendo los eventos",
                        icon: "success",
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 1000
                    });
                }
            </script>
        <?php } ?>

        <?php if (isset($_GET['message']) && $_GET['message'] == 'errorRegistro') { ?>
            <script>
                window.onload = function alertSuccess() {
                    swal({
                        title: "Opps!",
                        text: "Algo salió mal, intenta de nuevo",
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
                            <th scope="col">Mes</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($events as $event) {
                        ?>

                            <tr>
                                <th scope="row"><?php echo $event->id ?></th>
                                <td><?php echo $event->name ?></td>
                                <td><?php echo $event->month ?></td>
                                <td>
                                    <a class="btn btn-custom-primary" href="functions/event/registrar_evento.php?eventId=<?php echo $event->id ?>">Registrarme</a>
                                </td>
                            </tr>

                        <?php
                        }
                        ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>




<?php include 'template/footer.php'; ?>