<!-- Navigation -->
<?php require_once(ROOT.'/models/User.php');?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Practice Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/news/">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/authorization/">
                        <?php
                        if(!isset($_SESSION['user'])){
                            echo 'Войти';
                        } ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout/">
                        <?php
                        if(isset($_SESSION['user'])){
                            echo 'Выйти';
                        } ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/cabinet/"><?php
                        if(isset($_SESSION['user'])){
                            echo User::getUserById($_SESSION['user'])['username'];
                        }
                        ?></a>
                </li>
            </ul>
        </div>
    </div>
</nav>