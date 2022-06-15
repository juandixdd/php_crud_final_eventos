<?php include 'template/header.php'; ?>

<?php
include_once 'model/conexion.php';
$query = $bd->prepare("
select concat(e.name, ' - Semana ' ,r.semana,' - ', r.dia) as 'event' from users u
join usuario_evento r on u.id = r.id_user
join events e on e.id = r.id_event
where u.id = ?
order by e.name asc
");
$result = $query->execute([$_SESSION['user']['id']]);
$events = $query->fetchAll(PDO::FETCH_OBJ);


?>



<!-- ? profile -->

<div class="container scale-up-center" style="margin-bottom: 100px;">
    <div class="row justify-content-center m-5">
        <div class="col-md-3 mt-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Eventos suscritos</h5>
               
                    <?php foreach ($events as $event) { ?>
                        <ul class="list-group">
                            <li class="list-group-item"><?php echo $event->event ?></li>
                        </ul>
                    <?php } ?>
                </div>

            </div>
        </div>
        <div class="col-md-7 mt-5">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title"><?php echo $_SESSION['user']['names'] . " " . $_SESSION['user']['last_names'] ?> </h2>
                    <hr>
                    <h5><b>Edad:</b> <?php echo $_SESSION['user']['age']?></h5>
                    <h5><b>Email:</b> <?php echo $_SESSION['user']['email']?> </h5>
                    <?php if (isset($_SESSION['user']) && ($_SESSION['user']['role'] == 'admin')) { ?>
                        <h5><b>Rol:</b> <?php echo $_SESSION['user']['role']?> </h5>
                    <?php } ?>
                </div>




            </div>
        </div>

    </div>




    <?php include 'template/footer.php'; ?>