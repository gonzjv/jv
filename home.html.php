<?php
include_once $_SERVER['DOCUMENT_ROOT'] .
        '/includes/helpers.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Product Catalog</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="./css/bootstrap.min.css"
              <link rel="stylesheet" href="./css/custom.css"
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="./index.php">
                    <img src="./img/logo_car.png" width="200" height="57" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="./news.html.php">Новости</a>
                        <a class="nav-item nav-link" href="#">Цены</a>
                        <a class="nav-item nav-link disabled" href="#">всяка</a>
                    </div>
                </div>
            </nav>
            <?php if (sign_up()): ?>
                <div class="alert alert-success" role="alert">
                    Отлично! Регистрация успешно завершена. Теперь Вы можете пользоваться всеми возможностями сайта!
                </div>
            <?php endif; ?>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Главная</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col">
                    <p>Your shopping cart contains <?php echo count($_SESSION['cart']); ?> items.</p>
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
                        <?php foreach ($items as $item): ?>
                            <tbody>
                                <tr>
                                    <th scope="row"><?php htmlout($item['id']); ?></th>
                                    <td><?php htmlout($item['name']); ?></td>
                                    <td>$<?php echo number_format($item['price'], 2); ?></td>
                                    <td><form action="" method="post">
                                            <div>
                                                <input type="hidden" name="id" value="<?php htmlout($item['id']); ?>">
                                                <input type="submit" name="action" value="Buy">
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <p>All prices are in imaginary dollars. 
                        Автомоби́ль (от др.-греч. αὐτός — сам и лат. mobilis — подвижной, скорый) — моторное дорожное транспортное средство, используемое для перевозки людей или грузов. Основное назначение автомобиля заключается в совершении транспортной работы[1]. Автомобильный транспорт в промышленно развитых странах занимает ведущее место по сравнению с другими видами транспорта по объёму перевозок пассажиров[2]. Современный автомобиль состоит из 15—20 тысяч деталей, из которых 150—300 являются наиболее важными и требующими наибольших затрат в эксплуатации[3].

                        Понятие включает легковой автомобиль, грузовой автомобиль, автобус, троллейбус, бронетранспортёр, но не включает сельскохозяйственный трактор и мотоцикл.</p>
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
                    
                </div>
            </div>
        </div>

    </body>
</html>
