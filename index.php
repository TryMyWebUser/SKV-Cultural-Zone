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
                <img src="assets/img/loader1.gif" alt="Loader" />
            </div>
        </div>
        <div id="page" class="full-page">
            
            <?php include "temp/header.php" ?>

            <main id="content" class="site-main">
                <!-- home banner section html start -->
                <section class="home-banner d-flex align-items-end">
                    <div class="container">
                        <div class="row align-items-end">
                            <div class="banner-left col-md-6">
                                <div class="image-overlay pattern-overlay"></div>
                                <div class="banner-content">
                                    <div class="title-divider"></div>
                                    <div class="banner-title">
                                        <h1>SKV Cultural Zone</h1>
                                    </div>
                                    <div class="banner-text">
                                        <p>We offer expert training in Carnatic and Western music, dance, and drawing, with qualified teachers. Exams are conducted through Annamalai and Trinity Universities.</p>
                                    </div>
                                    <div class="banner-button">
                                        <a href="https://wa.me/+919842688981" class="button-round-secondary">For Enquiry</a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner-right col-md-6">
                                <figure class="banner-img">
                                    <div class="image-overlay-oval pattern-overlay"></div>
                                    <img src="assets/img/educator-img33.png" alt="" />
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="overlay-image pattern-overlay"></div>
                </section>
                
                <!-- home about section html start -->
                <section class="home-about-us">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="about-left-content">
                                    <figure class="figure-round-border">
                                        <img src="assets/img/about.jpg" alt="About Image" />
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-right-content">
                                    <h6 class="mb-3">About Us</h6>
                                    <div class="title-divider"></div>
                                    <h2 class="about-title">SKV Cultural Zone</h2>
                                    <p class="about-desc">
                                        Welcome to SKV Cultural Zone, where passion for music meets 28 years of excellence in nurturing talent and creativity. Established with the mission to promote music and cultural education, SKV Cultural Zone has become a hub for aspiring musicians, artists, and performers seeking to refine their skills and explore their artistic potential - Dr. Siva Gandarvani. S (Proprietor).
                                    </p>
                                    <div class="about-btn">
                                        <a href="about.php" class="button-round-secondary">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pattern-overlay"></div>
                    </div>
                </section>
                <!-- home service section html start -->
                <section class="home-service">
                    <div class="pattern-overlay"></div>
                    <div class="container">
                        <div class="service-wrapper">
                            <div class="pattern-circle overlay"></div>
                            <div class="service-content">
                                <div class="section-head">
                                    <div class="title-divider"></div>
                                    <h2>Our Classes</h2>
                                </div>
                                <?php
                                    $category = Operations::getCateChecker($conn);
                                    foreach ($category as $cate) {
                                        if ($cate['page'] === 'class') {
                                ?>
                                <div class="course-type">
                                    <div class="course-icon">
                                        <img src="assets/<?= $cate['img'] ?>" alt="Images">
                                    </div>
                                    <h4 class="course-title">
                                        <a href="categories.php?date=<?= $cate['title'] ?>"><?= $cate['title'] ?></a>
                                    </h4>
                                </div>
                                <?php } } ?>
                            </div>
                            <div class="service-content">
                                <div class="section-head">
                                    <div class="title-divider"></div>
                                    <h2>Our Courses</h2>
                                </div>
                                <?php
                                    foreach ($category as $cate) {
                                        if ($cate['page'] === 'course') {
                                ?>
                                <div class="course-type">
                                    <div class="course-icon">
                                        <img src="assets/<?= $cate['img'] ?>" alt="Images">
                                    </div>
                                    <h4 class="course-title">
                                        <a href="categories.php?date=<?= $cate['title'] ?>"><?= $cate['title'] ?></a>
                                    </h4>
                                </div>
                                <?php } } ?>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            
            <?php include "temp/footer.php" ?>

        </div>
    </body>
</html>