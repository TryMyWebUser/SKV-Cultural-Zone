<?php

    include "../libs/load.php";

    // Start a session
    Session::start();

    // Redirect if the user is already logged in
    if (Session::get('login_user'))
    {
        header('Location: welcome.php');
        exit;
    }

    $error = "";

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        // Check if both username and password keys exist in $_POST
        if (isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password']))
        {
            $username = $_POST['username'] ?? "";
            $password = $_POST['password'] ?? "";
            $error = User::login($username, $password);
        }
    }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="keywords" content="admin, dashboard, crm, analytics, ecommerce, team, vendor, ai chat bot, backend, panel" />
        <meta name="description" content="Best multipurpose admin dashboard template." />
        <meta name="author" content="Maraviya Infotech" />

        <title>Admin - Login</title>

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/img/favicon/favicon.png" />

        <!-- Icon CSS -->
        <link href="assets/css/vendor/materialdesignicons.min.css" rel="stylesheet" />
        <link href="assets/css/vendor/remixicon.css" rel="stylesheet" />

        <!-- Vendor -->
        <link href="assets/css/vendor/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/vendor/apexcharts.css" rel="stylesheet" />
        <link href="assets/css/vendor/owl.carousel.min.css" rel="stylesheet" />
        <link href="assets/css/vendor/daterangepicker.css" rel="stylesheet" />
        <link href="assets/css/vendor/jquery.datatables.min.css" rel="stylesheet" />
        <link href="assets/css/vendor/datatables.bootstrap5.min.css" rel="stylesheet" />
        <link href="assets/css/vendor/slick.min.css" rel="stylesheet" />

        <!-- Main CSS -->
        <link id="mainCss" href="assets/css/style.css" rel="stylesheet" />
    </head>

    <body data-cx-mode="light">
        <main class="wrapper">
            <section class="auth-section">
                <div class="cx-left">
                    <div class="cx-bg"></div>
                </div>
                <div class="cx-right">
                    <div class="cx-form-page">
                        <!-- Login form -->
                        <form class="cx-form" method="POST">
                            <h4>Admin</h4>
                            <div class="input-control">
                                <input type="text" placeholder="Enter Username" name="username" required />
                                <span class="password-field-show">
                                    <input type="password" placeholder="Enter Password" name="password" class="password-field" required />
                                    <span data-toggle=".password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </span>
                                <div class="form-btns">
                                    <button type="submit" name="submit">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>

        <!-- Vendor Custom -->
        <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
        <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
        <script src="assets/js/vendor/apexcharts.min.js"></script>
        <script src="assets/js/vendor/owl.carousel.min.js"></script>
        <script src="assets/js/vendor/daterangepicker.js"></script>
        <script src="assets/js/vendor/jquery.simple-calendar.js"></script>
        <script src="assets/js/vendor/jquery.datatables.min.js"></script>
        <script src="assets/js/vendor/fullcalendar.min.js"></script>
        <script src="assets/js/vendor/slick.min.js"></script>
        <script src="assets/js/vendor/moment.min.js"></script>

        <!-- Main Custom -->
        <script src="assets/js/main.js"></script>
        <script src="assets/js/data/chart-data.js"></script>
    </body>

</html>