<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/helpers.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ремонт автомобилей</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/custom.css">
    </head>
    <body>
        <div class="wrap">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="./index.php">
                    <img src="./img/logo_car.png" width="200" height="57" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="navbar-nav lead">
                        <a class="nav-item nav-link url" href="./index.php">Главная <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link url" href="?news">Новости</a>
                        <a class="nav-item nav-link url" href="#">Отзывы</a>
                        <a class="nav-item nav-link url" href="#">Галерея</a>
                        <a class="nav-item nav-link url active" href="?order">Запись</a>
                    </div>  
                </div>
            </nav>
            <div class="container lead">
                <?php if ($_SESSION['orderIsDone'] == true): ?>
                    <div class="alert alert-success" role="alert">
                        Поздравляем! Запись оформлена. Ждем Вас,  <?php htmlout($_SESSION['firstName'] . ', на ' . $_SESSION['vehicle'] . ' ' . $_SESSION['date']); ?>
                    </div>
                <?php endif; ?>
                <div class="row">
                    <div class="col-9 mt-5">
                        <form action="" method="post">
                            <div class="form-row text-light">
                                <div class="form-group col-md-4">
                                    <label for="orderDate">Выберите дату:</label>
                                    <select class="form-control" id="date" name="date">
                                        <?php foreach ($calendar as $day): ?>
                                            <option class="text-success" value="<?php htmlout($day['yearSQL'] . '-' . $day['monthSQL'] . '-' . $day['monthDay']); ?>"><?php htmlout($day['monthDay'] . ' ' . $month[$day['month']] . ', ' . $weekday[$day['weekday']]); ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <small>
                                        <strong>
                                            <div class="text-success">* Свободный день</div>
                                            <div class="text-warning">* Частично свободный день</div>
                                            <div class="text-danger"> * День занят</div>
                                        </strong>
                                    </small>
                                </div>
                                <div class="form-group col-md-3 ml-5">
                                    <label for="lastName">Данные для записи:</label>
                                    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Фамилия">
                                    <label for="firstName"></label>
                                    <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Имя">
                                    <label for="vehicle"></label>
                                    <input type="text" class="form-control" name="vehicle" id="vehicle" placeholder="Автомобиль">
                                </div>
                            </div>
                            <input type="hidden" name="action" value="insertOrder">
                            <button type="submit" class="btn btn-outline-light btn-sm">Записаться</button>
                        </form>
                    </div>
                    <div class="col-3">
                        <?php
                        if (userIsLoggedIn()) {
                            echo " Hi, " . $_SESSION['first_name'];
                            include './logout.inc.html.php';
                        } else {
                            include './login.html.php';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="./js/jquery-3.3.1.slim.min.js"></script>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
        <script src="./js/bootstrap.min.js"></script>
    </body>
</html>
