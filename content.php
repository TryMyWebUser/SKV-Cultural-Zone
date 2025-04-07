<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <?php include "temp/head.php" ?>
    
    </head>

    <body class="home">
        <div id="siteLoader" class="site-loader">
            <div class="preloader-content">
                <img src="assets/img/loader1.gif" alt="" />
            </div>
        </div>
        <div id="page" class="full-page">
            
            <?php include "temp/header.php" ?>

            <!-- main part -->
            <main id="content" class="site-main">
                <!-- Inner Banner html start-->
                <section class="inner-banner-wrap">
                    <div class="inner-baner-container" style="background-image: url(assets/img/educator-img12.jpg);">
                        <div class="container">
                            <div class="inner-banner-content">
                                <h1 class="inner-title"><?= $_GET['data'] ?></h1>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Inner Banner html end-->
                <!-- home about section html start -->
                <?php
                    $content = Operations::getContentChecker($conn);
                    if(!empty($content)) {
                        foreach ($content as $row) {
                ?>
                <section class="home-about-us pt-0" style="margin-bottom: 110px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="about-left-content m-0">
                                    <figure class="figure-round-border">
                                        <img src="assets/<?= $row['img'] ?>" class="m-0" alt="Image" />
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-right-content">
                                    <div class="title-divider"></div>
                                    <h2 class="about-title"><?= $row['title'] ?></h2>
                                    <p class="about-desc">
                                        <?= $row['dec'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="pattern-overlay"></div>
                    </div>
                </section>
                <?php } } else { echo "<p class='ps-5 pb-5'>Category Content Not Found</p>"; } ?>
            </main>
            
            <?php include "temp/footer.php" ?>

        </div>
    </body>
</html>