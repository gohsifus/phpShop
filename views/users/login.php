<?php require_once(ROOT . '/views/parts/header.php');?>
<body>
<?php require_once(ROOT . '/views/parts/navigateBar.php');?>

<div class="container">
    <form class="formSignIn" method="POST">
        <h2>Authorization</h2>

        <?php if (!empty($message)) {
            if($message == 'OK'){
                ?>
                <script>window.location = "/";</script>
                <?php
            } else {
                echo 'Неверный логин или пароль';
            }
        } ?>
        <input type="text" name="username" placeholder="username" class="form-control" required>
        <input type="password" name="password" placeholder="password" class="form-control" required>
        <button class="btn btn-lg btn-primary" type="submit">Authorize</button>
        <a href="/registration/" class="btn btn-lg btn-primary">Registration</a>
    </form>

</div>

<?php require_once(ROOT.'/views/parts/footer.php');?>
</body>
</html>