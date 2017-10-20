
<h4>Войти</h4>
<?php if (isset($loginError)): ?>
    <p><?php htmlout($loginError); ?></p>
<?php endif; ?>
<form action="" method="post">
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input">
            Check me out
        </label>
    </div>
    <div>
        <input type="hidden" name="action" value="login">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
<!--    <div>
        <label for="email">Email: <input type="text" name="email"
                                         id="email"></label>
    </div>
    <div>
        <label for="password">Password: <input type="password"
                                               name="password" id="password"></label>
    </div>
    <div>
        <input type="hidden" name="action" value="login">
        <input type="submit" value="Log in">
    </div>-->
</form>
<p><a href="/jv/admin/">Return to CMS home</a></p>
<?php include './logout.inc.html.php'; ?>
