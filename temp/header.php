<?php

    include "libs/load.php";

    $conn = Database::getConnect();
    $category = Operations::getCateChecker($conn);

?>

<header class="site-header site-header-transparent">
    <!-- header html start -->
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 d-none d-lg-block">
                    <div class="header-contact-info">
                        <ul>
                            <li>
                                <a href="tel:+919842688981"><i class="fas fa-phone-alt"></i> +91 984 268 8981</a>
                            </li>
                            <li>
                                <a href="mailto:skvculturalzone@gmail.com"><i class="fas fa-envelope"></i> skvculturalzone@gmail.com</a>
                            </li>
                            <li>
                                <a href="https://maps.app.goo.gl/3jQ4FzwX9mycdqUY7"><i class="fas fa-map-marker-alt"></i> 178, Kuppichipalayam, SRKV Post, Coimbatore - 641020</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 d-flex justify-content-lg-end justify-content-between">
                    <div class="header-social social-links">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="fab fa-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://wa.me/9842688981" target="_blank">
                                    <i class="fab fa-whatsapp" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/" target="_blank">
                                    <i class="fab fa-youtube" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-header" id="masthead">
        <div class="container">
            <div class="hb-group d-flex align-items-center justify-content-between">
                <div class="site-identity col-lg-3">
                    <p class="site-title">
                        <a href="index.php">
                            <!-- <img src="assets/img/educator-logo1.png" alt="logo" /> -->
                            <h4 style="margin-bottom: 0; color: #F24080; margin-top: 0.5rem;">SKV Cultural Zone</h4>
                        </a>
                    </p>
                </div>
                <div class="main-navigation col-lg-9 justify-content-between d-flex align-items-center">
                    <nav id="navigation" class="navigation d-none d-lg-inline-block">
                        <ul style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center;">
                            <li class="current-menu-item">
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="about.php">About Us</a>
                            </li>
                            <!-- < ?php
                                foreach ($category as $cate) {
                            ?>
                            <li>
                                <a href="categories.php?data=< ?= $cate['title'] ?>">< ?= $cate['title'] ?></a>
                            </li>
                            < ?php } ?> -->
                            <li class="menu-item-has-children">
                                <a href="#">Classes</a>
                                <ul>
                                    <?php
                                        foreach ($category as $cate) {
                                            if ($cate['page'] === 'class') {
                                    ?>
                                    <li>
                                        <a href="categories.php?data=<?= $cate['title'] ?>"><?= $cate['title'] ?></a>
                                    </li>
                                    <?php } } ?>
                                </ul>
                            </li>
                            <!-- <li class="menu-item-has-children">
                                <a href="#">Courses</a>
                                <ul> -->
                                    <?php
                                        foreach ($category as $cate) {
                                            if ($cate['page'] === 'course') {
                                    ?>
                                    <li>
                                        <a href="categories.php?data=<?= $cate['title'] ?>"><?= $cate['title'] ?></a>
                                    </li>
                                    <?php } } ?>
                                <!-- </ul>
                            </li> -->
                            <li>
                                <a href="pay.php">Pay Now</a>
                            </li>
                            <li>
                                <a href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="header-btn d-inline-block">
                        <a href="tel:+919842688981" class="button-round-secondary">Get Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu-container"></div>
</header>