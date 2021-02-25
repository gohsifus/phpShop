<?php require_once(ROOT . '/views/parts/header.php');?>
<body>
<?php require_once(ROOT.'/views/parts/navigateBar.php');?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Title -->
            <h1 class="mt-4"><?php echo $goods['name'];?></h1>

            <hr>

            <p class="lead">
                <a href="#"><?php echo 'Категория'?></a>
            </p>

            <hr>

            <h2><?php echo $goods['cost'];?>$</h2>

            <hr>


            <!-- Preview Image -->
            <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

            <hr>

            <!-- Post Content -->
            <p><?php echo $goods['description']?></p>

            <hr>
        </div>
    </div>
</div>
<?php require_once(ROOT.'/views/parts/footer.php');?>
</body>

</html>