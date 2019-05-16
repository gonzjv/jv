<?php
include_once $_SERVER['DOCUMENT_ROOT'] .
        '/includes/helpers.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Лаборатория по наладке стационарных установок</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--<link rel="stylesheet" href="./css/bootstrap.min.css">-->
        <link rel="stylesheet" href="./css/departments.css">
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
                        <a class="nav-item nav-link url" href="./index.php">Главная</a>
                        <a class="nav-item nav-link active url" href="?structure">Структура</a>
                        <a class="nav-item nav-link url" href="?phones">Телефоны</a>
                        <!--<a class="nav-item nav-link url" href="?news">Новости</a>-->
                        <!--<a class="nav-item nav-link url" href="#">Отзывы</a>-->
                        <!--<a class="nav-item nav-link url" href="#">Галерея</a>-->
                        <!--<a class="nav-item nav-link url" href="?order">Подать заявку</a>-->
                        <!--<a class="nav-item nav-link url" href="?shop">Магазин</a>-->
                    </div>  
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-7">
                        <div class="text-dark mt-3">
                            <p class="mb-4 text-primary">Лаборатория по наладке стационарных установок</p>
                            <p class="mb-2"><mark>Начальник</mark>– <i>Маринич Владимир Васильевич</i>, тел. 29 76 01</p>
                            <p class="ml-3 mb-2"><mark>Зам. начальника</mark> – <i>Волков Михаил Леонидович</i>, тел. 29 75 69;</p>
                        </div>
                    </div>
                    <div class="col-5 mt-3">
                        <p class="mb-0"><a class="url" href="?rmin"> Цех ремонта, монтажа и наладки (РМиН)</a></p>
                        <p class="mb-0"><a class="url" href="?static_lab"> Лаборатория по наладке стационарных установок </a></p>
                        <p class="mb-0"><a class="url" href="?automation_lab"> Лаборатория автоматизации</a></p>
                        <p class="mb-0"><a class="url" href="?kipia"> Цех контрольно-измерительных приборов и автоматики (КИПиА)</a></p>
                        <p class="mb-0"><a class="url" href="?metro_lab"> Лаборатория метрологии</a></p>
                        <p class="mb-0"><a class="url" href="?radio_lab"> Лаборатория  радиоизотопной  техники  и  радиационной  безопасности (ЛРТиРБ)</a></p>
                        <p class="mb-0"><a class="url" href="?new_tech_department"> Отдел автоматизации и внедрения новых технологий</a></p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-7">
                        <p>Виды деятельности:</p>
                        <ul>
                            <li>технический контроль и наладка оборудования клетевых и скиповых шахтных подъёмных установок;</li>
                            <li>технический контроль и наладка поверхностных и подземных главных вентиляторных установок;</li>
                            <li>подготовка оборудования к испытаниям и проведение контрольных испытаний на шахтных подъёмных установках;</li>
                            <li>работы по анализу и профилактике неисправностей при производственной необходимости в процессе текущей эксплуатации оборудования;</li>
                            <li>выполнение монтажных и пусконаладочных работ при модернизации оборудования и вводе нового оборудования.</li>
                        </ul>
                    </div>
                    <div class="col-3">
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