<?php require_once(ROOT . '/views/parts/header.php');?>
<body>

<?php require_once(ROOT . '/views/parts/navigateBar.php');?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4">Новости магазина
                <small>и всякое интересное</small>
            </h1>

            <!--Вывод списка новостей-->
            <?php if (!empty($newsList)) {
                foreach($newsList as $news):?>
                    <div class="card mb-4">
                        <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                        <div class="card-body">
                            <a href="/news/all/<?php echo $news['id']?>"><h5 class="card-title"><?php echo $news['tittle'];?></h5></a>
                            <hr>
                            <p class="card-text"><?php echo $news[short_content];?></p>
                        </div>
                        <div class="card-footer text-muted">
                            Posted on <?php echo $news['date'];?>
                            by <?php echo $news['author_name']?>
                        </div>
                    </div>
                <?php endforeach;
            } ?>
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Search Widget -->
            <div class="card my-4">
                <h5 class="card-header">Search</h5>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
                    </div>
                </div>
            </div>

            <!-- Categories Widget -->
            <div class="card my-4">
                <h5 class="card-header">Категории</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">Спорт</a>
                                </li>
                                <li>
                                    <a href="#">Политика</a>
                                </li>
                                <li>
                                    <a href="#">Природа</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<?php require_once(ROOT.'/views/parts/footer.php');?>

</body>

</html>