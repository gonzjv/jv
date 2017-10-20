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
            <div class="row">
                <div class="col">
                <p>Your shopping cart contains <?php echo count($_SESSION['cart']); ?> items.</p>
                <p><a href="?cart">View your cart</a></p>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Item Description</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($items as $item): ?>
                            <tr>
                                <td><?php htmlout($item['desc']); ?></td>
                                <td>
                                    $<?php echo number_format($item['price'], 2); ?>
                                </td>
                                <td>
                                    <form action="" method="post">
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
                <p>All prices are in imaginary dollars.</p>
            </div>

        <div class="col">
            <?php
            if (userIsLoggedIn()) {
                echo " Hi, " . $_SESSION['username'];
                include './logout.inc.html.php';
            } else {
                include './login.html.php';
                exit();
            }
            ?>
        </div>
    </div>
</div>

</body>
</html>
