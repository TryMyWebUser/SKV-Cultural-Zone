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

            <!-- coming soon start -->
            <div class="comming-soon-section" style="background-image: url(assets/img/educator-img12.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="comming-soon-wrap">
                        <section class="site-identity">
                            <h1 class="site-title">
                                <a href="index.html">
                                    <!-- <img class="white-logo" src="assets/img/educator-logo1.png" alt="logo" /> -->
                                    <h2 class="white-logo">SKV Cultural Zone</h2>
                                </a>
                            </h1>
                        </section>
                        <article class="comming-soon-content">
                            <h2 class="section-title">
                                We are coming soon !!
                            </h2>
                            <h6>Something awesome is in the works</h6>
                        </article>
                        <!-- Time count down html -->
                        <div class="time-counter-wrap">
                            <div class="time-counter" data-date="2025-04-06 23:58:58">
                                <!-- Date Formate Input yyyy-mm-dd hh:mm:ss -->
                                <div class="counter-time">
                                    <span class="counter-days">39</span>
                                    <span class="label-text">Days</span>
                                </div>
                                <div class="counter-time">
                                    <span class="counter-hours">10</span>
                                    <span class="label-text">Hours</span>
                                </div>
                                <div class="counter-time">
                                    <span class="counter-minutes">46</span>
                                    <span class="label-text">Minutes</span>
                                </div>
                                <div class="counter-time">
                                    <span class="counter-seconds">50</span>
                                    <span class="label-text">Seconds</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overlay"></div>
            </div>
            <!-- coming soon end -->
            <?php include 'temp/footer.php'; ?>
        </div>
    </body>
</html>