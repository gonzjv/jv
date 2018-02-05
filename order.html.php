<?php
include_once $_SERVER['DOCUMENT_ROOT'] .
        '/includes/helpers.inc.php';
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
                            <a class="nav-item nav-link active url" href="./index.php">Главная <span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link url" href="?news">Новости</a>
                            <a class="nav-item nav-link url" href="#">Отзывы</a>
                            <a class="nav-item nav-link url" href="#">Галерея</a>
                        </div>  
                    </div>
                </nav>
                <div class="container">
                    <?php if (sign_up()): ?>
                        <div class="alert alert-success" role="alert">
                            Отлично! Регистрация успешно завершена. Теперь Вы можете пользоваться всеми возможностями сайта!
                        </div>
                    <?php endif; ?>
                    <!--                    <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb breadcrumb-mod">
                                                <li class="breadcrumb-item active" aria-current="page">Главная</li>
                                            </ol>
                                        </nav>-->
                    <div class="row">
                        <div class="col-9">
                            <div class="lead text-light mt-5">
                                <p>Ремонтируем с 1998 года.</p>
                                <p>Около 6000 замененных деталей подвески</p>
                                <p>на 150 и более моделей автомобилей</p>
                                <input type="hidden" name="action" value="login">
                                <button type="submit" class="btn btn-light btn-lg">Записаться...</button>
                            </div>
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
                    <div class="row">
                        <div class="col">
    <!--                            <p>Your shopping cart contains <?php echo count($_SESSION['cart']); ?> items.</p>
                            <p><a href="?cart">View your cart</a></p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Desk game</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">#</th>
                                    </tr>
                                </thead>
                            <?php // foreach ($items as $item): ?>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row"><?php // htmlout($item['id']);    ?></th>
                                                                                        <td><?php // htmlout($item['name']);    ?></td>
                                                                                        <td>$<?php // echo number_format($item['price'], 2);    ?></td>
                                                                                        <td><form action="" method="post">
                                                                                                <div>
                                                                                                    <input type="hidden" name="id" value="<?php // htmlout($item['id']);    ?>">
                                                                                                    <input type="submit" name="action" value="Buy">
                                                                                                </div>
                                                                                            </form>
                                                                                        </td>
                                                                                    </tr>
                            <?php // endforeach; ?>
                                </tbody>
                            </table>
                            <p>All prices are in imaginary dollars.</p>
                        </div>-->
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
