
<h1>Log In</h1>
<p>Please log in to save your history.</p>
<?php if (isset($loginError)): ?>
    <p><?php htmlout($loginError); ?></p>
<?php endif; ?>
<form action="" method="post">
    <div>
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
    </div>
</form>
<p><a href="/jv/admin/">Return to CMS home</a></p>
<?php include './logout.inc.html.php'; ?>
