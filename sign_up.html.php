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
        <form action="index.php" method="post" class="container">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="first_name">First name</label>
                    <input type="text" class="form-control" name="first_name"  id="first_name" placeholder="Aleksey" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="last_name">Last name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Ogurcov" required>
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
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="+375331112233" required>
                    <div class="invalid-feedback">
                        Please provide a valid phone number.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" id="password" >
                </div>
                <div class="col-md-6 mb-3">
                    <label for="passConfirm">Confirm password </label>
                    <input type="text" class="form-control" name="passConfirm" id="pass_confirm" >
                </div>
            </div>
            <?php if (isset ($signUpError)): ?>
                <p><?php htmlout($signUpError); ?></p>
            <?php endif; ?>
            <div>
                <input type="hidden" name="action" value="sign_up">
                <button type="submit" class="btn btn-primary btn-sm" >Submit</button>
            </div>
        </form>
    </body>
</html>