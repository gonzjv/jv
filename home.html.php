<?php
include_once $_SERVER['DOCUMENT_ROOT'] .
        '/includes/helpers.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Управление автоматизации</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--<link rel="stylesheet" href="./css/bootstrap.min.css">-->
        <link rel="stylesheet" href="./css/home.css">
    </head>
    <body>
        <div class="wrap">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand mx-5" href="./index.php">
                    <!--<img src="./img/logo_car.png" width="200" height="57" alt="">-->
                    <div class="lead text-dark">
                        <strong>
                        <div>Управление автоматизации</div> 
                        <div class="mx-4">ОАО "Беларуськалий"</div> 
                        </strong>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="navbar-nav lead">
                        <a class="nav-item nav-link active url" href="./index.php">Главная <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link url" href="?structure">Структура</a>
                        <a class="nav-item nav-link url" href="?phones">Телефоны</a>
                        <!--<a class="nav-item nav-link url" href="?news">Новости</a>-->
                        <!--<a class="nav-item nav-link url" href="#">Отзывы</a>-->
                        <!--<a class="nav-item nav-link url" href="#">Галерея</a>-->
                        <!--<a class="nav-item nav-link url" href="?order">Подать заявку</a>-->
                        <!--<a class="nav-item nav-link url" href="?shop">Магазин</a>-->
                    </div>  
                </div>
            </nav>
            <div class="container lead">
                <?php if (sign_up()): ?>
                    <div class="alert alert-success" role="alert">
                        Отлично! Регистрация успешно завершена. Теперь Вы можете пользоваться всеми возможностями сайта!
                    </div>
                <?php endif; ?>
                <?php // if ($_SESSION['orderIsDone'] == true): ?>
                <!--                    <div class="alert alert-success" role="alert">
                                        Поздравляем! Запись оформлена. Ждем Вас,  <?php htmlout($_SESSION['firstName'] . ', на ' . $_SESSION['vehicle'] . ' ' . $_SESSION['date']); ?>
                                    </div>-->
                <?php // endif; ?>
                <div class="row">
                    <div class="col-7">
                        <div class="text-dark mt-3">
                            <p>Мы <em>строжайше</em> проектируем, выполняем монтаж и наладку:</p>
                            <p class="ml-5 mb-0">-- АСУТП;</p>
                            <p class="ml-5 mb-0">-- систем пожарной сигнализации;</p>
                            <p class="ml-5">-- систем видеонаблюдения;</p>
                            <p class="mb-0">- 1993 - год, когда мы все здесь собрались;</p>
                            <p class="mb-0">- 2520 промышленных объектов на орбите (ой-ой, в эксплуатации);</p>
                            <p>- 400 уж очень увлеченных специалистов в составе.</p>
<!--                            <form action="" method="post">
                                <input type="hidden" name="action" value="order">
                                <button type="submit" class="btn btn-light btn-lg">Подать заявку...</button>
                            </form>-->
                        </div>
                    </div>

                    <div class="col-3">
                        <?php
//                        if (userIsLoggedIn()) {
//                            echo " Hi, " . $_SESSION['first_name'];
//                            include './logout.inc.html.php';
//                        } else {
//                            include './login.html.php';
//                        }
//                        
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
