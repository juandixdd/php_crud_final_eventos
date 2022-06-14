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

                        <?php
                        foreach ($events as $event) {
                        ?>

                            <tr>
                                <th scope="row"><?php echo $event->id ?></th>
                                <td><?php echo $event->name ?></td>
                                <td><?php echo $event->date ?></td>
                                <td><?php echo $event->day ?></td>
                                <td><?php echo $event->hour ?></td>
                                <td>Semana 1</td>
                                <td><?php echo $event->month ?></td>
                                <td>
                                    <a href="" class="btn btn-custom-primary">Registrarme</a>
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

<?php
echo $_SESSION['email'];
print_r($_SESSION['user']);
?>

<?php include 'template/footer.php'; ?>