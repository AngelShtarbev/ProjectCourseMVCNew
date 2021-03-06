
<?php require_once __DIR__.'/include/header.php'; ?>
<?php require_once __DIR__.'/include/nav.php'; ?>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row carousel-holder">
                <div class="col-md-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="slide-image" src="images/nfs.jpg"  alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="images/cob3.jpg"  alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="images/gtav.jpg" alt="">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach($randomGames as  $games) : ?>
                    <div class="col-md-4">
                        <div id="games" class="thumbnail">
                            <img src="images/<?php echo $games->getImage(); ?>" style="width:300px;height:370px;" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$<?php echo sprintf("%01.2f",$games->getPrice());?></h4>
                                <h4><?php echo $games->getNameId(); ?></h4>
                                <br/>
                                <a href="index.php?c=games&m=showGame&id=<?php echo $games->getId(); ?>"><button type="button" class="btn btn-primary">View Game</button></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!-- /.container -->
<?php require_once __DIR__.'/include/footer.php'; ?>

