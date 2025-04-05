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
                    <div class="cx-page-title cx-page-title-2">
                        <h5>Dashboard</h5>
                        <ul>
                            <li><a href="index.php">Dashboard</a></li>
                            <li>View Category</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12 col-md-12">
                        <div class="cx-card" id="assigntbl">
                            <div class="cx-card-header">
                                <h4 class="cx-card-title">View Courses Category</h4>
                                <div class="header-tools">
                                    <a href="addCo_Sub.php" class="button-add" title="Add Category">Add Sub Courses</a>
                                </div>
                            </div>
                            <div class="cx-card-content card-default">
                                <div class="assign-table">
                                    <div class="table-responsive">
                                        <table id="todo-data-table" class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Image</th>
                                                    <th>Title</th>
                                                    <th>Date & Time</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $conn = Database::getConnect();
													$category = Operations::getSubCateChecker($conn);
                                                    $i = 0;
													foreach ($category as $index => $cate) {
                                                        $c = $cate['category'];
                                                        $qry = $conn->query("SELECT * FROM `category` WHERE `title` = '$c'")->fetch_array();
														if ($qry['page'] === 'course') {
                                                            $i++
												?>
                                                <tr>
                                                    <td class="token"><?= $i ?></td>
                                                    <td>
                                                        <span class="assign-person">
                                                            <a href="javascript:void(0)" title="<?= $cate['title'] ?>"><img class="cat-thumb" src="<?= $cate['img'] ?>" alt="Image" /></a>
														</span>
                                                    </td>
                                                    <td>
                                                        <span class="name"><?= $cate['title'] ?></span>
                                                    </td>
                                                    <td><?= $cate['created_at'] ?></td>
                                                    <td>
                                                        <div class="d-flex justify-content-center">
                                                            <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                                                <span class="sr-only"><i class="ri-settings-3-line"></i></span>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="editSubC.php?edit_id=<?= $cate['id'] ?>">Edit</a>
                                                                <a class="dropdown-item" href="deleteSubCl.php?delete_id=<?= $cate['id'] ?>">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
												<?php
													} }
												?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
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