<?php require_once(ROOT . '/views/parts/header.php');?>
<body>
<?php require_once(ROOT.'/views/parts/navigateBar.php');?>

<div class="container">
    <?php if ($flagRegistrate) {
        echo $message;
    } else {?>
    <form action="#" class="formSignIn" method="POST">
        <h2>Registration</h2>
        <?php if (!empty($message)) {
            echo $message;
        }?>
        <input type="text" name="username" placeholder="username" class="form-control" required>
        <input type="email" name="email" placeholder="some@some" class="form-control" required>
        <input type="password" name="password" placeholder="password" class="form-control" required>
        <button class="btn btn-lg btn-primary" type="submit">Register</button>
        <a href="/authorization/" class="btn btn-lg btn-primary">Authorization</a>
    </form>
    <?php }?>
</div>
<?php require_once(ROOT.'/views/parts/footer.php');?>
</body>

</html>
