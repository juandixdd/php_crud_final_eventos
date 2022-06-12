<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="assets/styles/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/img/logo.png">
    <title>JuanDi-Events</title>
</head>

<body>
    <!-- ? headder  -->
    <div class="container-fluid container-header">
        <header class="p-2">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-3">
                    <div class="row align-items-center">
                        <a href="#" class="col-auto"><img src="assets/img/logo.png" alt="Logo" class="logo-header "></a>
                        <a href="#" class="col-auto header-tittle">
                            <h3 class="tracking-in-expand">JuandiEvents</h3>
                        </a>
                    </div>
                </div>

                <?php
                session_start();
                if (isset($_SESSION['email'])) {
                    
                ?>

                    <div class="col-md-3 p-2">
                        <div class="row justify-content-center">
                            <div class="col-auto p-1">
                                <a href="principalPage.php" class="btn btn-outline-light width-auto">Eventos</a>
                            </div>
                            <div class="dropdown col-auto p-1">
                                <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo $_SESSION['email']; ?>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="profile.php">Perfil</a></li>
                                    <li><a class="dropdown-item text-danger" href="functions\user\logout.php">Cerrar sesión</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                <?php
                } else {
                ?>

                    <div class="col-md-3 p-2">
                        <div class="row justify-content-center">
                            <div class="col-auto p-1">
                                <a href="index.php" class="btn btn-outline-light width-auto">Iniciar Sesión</a>
                            </div>

                        </div>
                    </div>

                <?php
                }
                ?>


            </div>
        </header>

    </div>