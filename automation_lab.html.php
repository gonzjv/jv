<?php
include_once $_SERVER['DOCUMENT_ROOT'] .
        '/includes/helpers.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Лаборатория автоматизации</title>
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
                            <p class="mb-4 text-primary">Лаборатория автоматизации</p>
                            <p class="mb-2"><mark>Начальник</mark> – <i>Хроль Валерий Николаевич</i>, тел. 22 32 42</p>
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
                        <p>Лаборатория состоит из двух подразделений.</p>
                        <p class="text-info">Бюро проектно-конструкторских работ</p>
                        <p><mark>Начальник</mark> – <i>Шахнер Дмитрий Николаевич</i>, тел. 26 25 00</p>
                        <p>Бюро выполняет разработку проектно-сметной документации автоматизации технологических процессов и производств, автоматизированного электропривода, по системам автоматической пожарной сигнализации, оповещения о пожаре, охранной сигнализации, видеонаблюдения, линий вычислительных сетей, АСКУЭ.</p>
                        <p class="text-info">Отделение по наладке и испытаниям систем автоматизации</p>
                        <p><mark>Начальник</mark> – <i>Давидовский Сергей Ярославович</i>, тел. 29 85 24</p>
                        <p>Отделение выполняет:</p>
                        <ul>
                            <li>разработку исполняемого прикладного программного обеспечения программируемых логических контроллеров;</li>
                            <li>наладку систем автоматизации технологических процессов и производств.</li>
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
