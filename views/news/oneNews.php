<?php require_once(ROOT . '/views/parts/header.php');?>
<body>
<?php require_once(ROOT.'/views/parts/navigateBar.php');?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Title -->
            <h1 class="mt-4"><?php echo $news['tittle']?></h1>

            <!-- Author -->
            <p class="lead">
                by
                <a href="#"><?php echo $news['author_name']?></a>
            </p>

            <hr>

            <!-- Date/Time -->
            <p>Posted on <?php echo $news['date']?></p>

            <hr>

            <!-- Preview Image -->
            <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

            <hr>

            <!-- Post Content -->
            <p><?php echo $news['content']?></p>

            <hr>
        </div>
    </div>
</div>
            <?php require_once(ROOT.'/views/parts/footer.php');?>
</body>

</html>