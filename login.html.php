
<form action="" method="post">
    <div class="form-group lead text-dark">
        <label for="email">Вход</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Ваш email">
    </div>
    <div class="form-group">
        <!--<label for="password"></label>-->
        <input type="password" class="form-control" name="password" id="password" placeholder="Пароль">
    </div>
    <div class="lead text-dark">
    <?php if (isset($loginError)): ?>
        <p><?php htmlout($loginError); ?></p>
    <?php endif; ?>
    </div>
    <div>
        <input type="hidden" name="action" value="login">
        <button type="submit" class="btn btn-outline-dark btn-sm">Войти</button>
        <a class="float-right lead text-dark url" href="?sign_up">Регистрация</a>
    </div>
</form>
