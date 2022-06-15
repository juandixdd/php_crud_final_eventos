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
            <div class="card m-3">
                <div class="card-body">
                    <div class="card-tittle">
                        <h5 class="card-title">Registrar un nuevo evento</h5>
                    </div>
                    <form action="nuevoEventoProceso.php" method="POST">

                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombre del evento</label>
                            <input type="text" class="form-control" placeholder="Nombre del evento" name="name" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label">Descripción del evento</label>
                            <textarea class="form-control" placeholder="Descripción del evento" name="description" required></textarea>
                        </div>

                        <!-- Select para el mes -->
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label">Mes del evento</label>
                            <select class="form-select" aria-label="Default select example" name="month">
                                <option value="Enero" selected>Enero</option>
                                <option value="Febrero">Febrero</option>
                                <option value="Marzo">Marzo</option>
                                <option value="Abril">Abril</option>
                                <option value="Mayo">Mayo</option>
                                <option value="Junio">Junio</option>
                                <option value="Julio">Julio</option>
                                <option value="Agosto">Agosto</option>
                                <option value="Septiembre">Septiembre</option>
                                <option value="Octubre">Octubre</option>
                                <option value="Noviembre">Noviembre</option>
                                <option value="Diciembre">Diciembre</option>
                            </select>
                        </div>

                        <!-- Buttons -->
                        <div class="row m-1 justify-content-end">
                            <a class="btn btn-outline-dark col-auto m-1" href="../../principalPage.php?message=null">Cancelar</a>
                            <input type="submit" class="btn btn-custom-primary col-auto m-1" value="Registrar El evento">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>