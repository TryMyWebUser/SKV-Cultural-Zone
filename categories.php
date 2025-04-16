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
                                <h1 class="inner-title">Categories</h1>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Inner Banner html end-->
                <!-- categories page html start -->
                <section class="categories-section">
                    <div class="pattern-overlay"></div>
                    <div class="container">
                        <div class="service-wrapper">
                            <div class="pattern-circle overlay"></div>
                            <div class="service-content">
                                <?php
                                    $category = Operations::getSubCategoryChecker($conn);
                                    if (!empty($category)) {
                                        foreach ($category as $sub) {
                                ?>
                                <div class="course-type">
                                    <div class="course-icon">
                                        <img src="assets/<?= $sub['img'] ?>" alt="Images">
                                    </div>
                                    <h4 class="course-title">
                                        <a href="content.php?data=<?= $sub['title'] ?>">
                                            <?= $sub['title'] ?>
                                        </a>
                                    </h4>
                                </div>
                                <?php
                                    } 
                                    } else {
                                        echo "<p>No Categories Found</p>";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- categories page html end -->
            </main>
            
            <?php include "temp/footer.php" ?>

        </div>
    </body>
</html>