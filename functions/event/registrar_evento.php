<!-- 

select count(u.id_usuario) from usuario_evento u
inner join evento e on e.id_evento = u.id_evento
where e.mes = "Junio" and e.semana = 1

Para validar la cantidad de usuarios que hay en cada evento

 -->

<?php
include_once "../../model/conexion.php";

$eventId = $_GET['eventId'];
$query = $bd->query("SELECT * FROM events WHERE id = $eventId");
$event = $query->fetchAll(PDO::FETCH_OBJ);
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrarse al evento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="../../assets/styles/style.css" rel="stylesheet">
</head>

<body style="background-color: #F7F7F7">

    <div class="row m-0 vh-100 justify-content-center align-items-center scale-up-center">
        <div class="col-md-6 p-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Registrarse al evento: <?php echo $event[0]->name ?> del mes de <?php echo $event[0]->month ?></h5>
                    <p class="card-text p-3">
                        <?php echo $event[0]->description ?>
                    </p>

                    <hr>

                    <form action="registrar_evento_proceso.php" method="POST">
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label">Semana del evento</label>
                            <select class="form-select" aria-label="Default select example" name="semana">
                                <option value="1" selected>Semana 1</option>
                                <option value="2">Semana 2</option>
                                <option value="3">Semana 3</option>
                                <option value="4">Semana 4</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label">Día del evento</label>
                            <select class="form-select" aria-label="Default select example" name="dia">
                                <option value="1" selected>Lunes</option>
                                <option value="2">Martes</option>
                                <option value="3">Miércoles</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label">Hora del evento</label>
                            <select class="form-select" aria-label="Default select example" name="hora">
                                <option value="1" selected>8 AM</option>
                                <option value="2">2 PM</option>
                            </select>
                        </div>

                        <!-- Buttons -->
                        <div class="row m-1 justify-content-end">
                            <a class="btn btn-outline-dark col-auto m-1" href="../../principalPage.php?message=null">Cancelar</a>
                            <input type="submit" class="btn btn-custom-primary col-auto m-1" value="Registrarme">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>