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
        <form action="" method="post" class="container">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="first_name">First name</label>
                    <input type="text" class="form-control" id="first_name" placeholder="First name" value="Tirion" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="last_name">Last name</label>
                    <input type="text" class="form-control" id="last_name" placeholder="Last name" value="Lannister" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="tirion@mail.ru">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="phone">Phone number</label>
                    <input type="text" class="form-control" id="phone" placeholder="+375331112233" required>
                    <div class="invalid-feedback">
                        Please provide a valid phone number.
                    </div>
                </div>
            </div>
            <input type="hidden" name="action" value="sign_up">
            <input type="hidden" name="goto" value="./">
            <button class="btn btn-primary btn-sm" type="submit">Submit</button>
        </form>
    </body>
</html>