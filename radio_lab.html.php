<?php
include_once $_SERVER['DOCUMENT_ROOT'] .
        '/includes/helpers.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Лаборатория  радиоизотопной  техники  и  радиационной  безопасности (ЛРТиРБ)</title>
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
                            <p class="mb-4 text-primary">Лаборатория  радиоизотопной  техники  и  радиационной  безопасности (ЛРТиРБ)</p>
                            <p class="mb-2"><mark>Начальник</mark> – <i>Смирнов Александр Иванович</i>, тел. 29 45 38</p>
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
                        <p>Лаборатория выполняет следующие виды работ:</p>
                        <ul>
                            <li>приборный  контроль  технологических  процессов,  начиная  с  добычи  руды  и заканчивая  отгрузкой  готовой  продукции потребителям, включающий обслуживание следующих типов радиоизотопных и радиометрических приборов:
                                <ul>
                                    <li>измерители калия - контролирующие массовую долю хлористого калия на всех стадиях переработки и обогащения;</li>
                                    <li>радиоизотопные плотномеры - измеряющие плотность жидких сред и пульп в трубопроводах;</li>
                                    <li>радиоизотопные измерители нагрузки и конвейерные весы - определяющие нагрузку на ленточных конвейерах;</li>
                                    <li>сигнализаторы уровня - контролирующие загрузку  и  выгрузку  различных технологических емкостей.</li>
                                </ul>
                            </li>
                            <li>внедрение новых образцов радиоизотопных и радиометрических приборов;</li>
                            <li>ремонт радиоизотопных и радиометрических приборов;</li>
                            <li>радиационный и дозиметрический контроль.</li>
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
