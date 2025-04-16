<?php

    include "../libs/load.php";

    // Start a session
    Session::start();

    if (!Session::get('login_user'))
    {
        header("Location: index.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <?php include "temp/head.php" ?>

    </head>

    <body data-cx-mode="light">
        <main class="wrapper sb-default">

            <!-- Sidebar -->
            <?php include "temp/sideheader.php" ?>

            <!-- Header -->
            <?php include "temp/header.php" ?>

            <!-- Main Content -->
            <div class="cx-main-content">
                <div class="cx-breadcrumb">
                    <div class="cx-page-title">
                        <h5>Welcome, Admin.</h5>
                        <p>Here's what's happening with your store today.</p>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer>
                <div class="copyright">
                    <p><span id="copyright_year"></span> Designed and Developed By <a href="https://trymywebsites.com/">Trymywebsites</a></p>
                </div>
            </footer>
        </main>

        <?php include "temp/footer.php" ?>

    </body>
</html>