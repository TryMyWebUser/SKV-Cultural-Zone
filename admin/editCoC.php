<?php

    include "../libs/load.php";

    // Start a session
    Session::start();

    if (!Session::get('login_user'))
    {
        header("Location: index.php");
        exit;
    }

    $conn = Database::getConnect();
    $cate = Operations::getContent($conn);

    $error = "";

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        // Check if both username and password keys exist in $_POST
        if (isset($_POST['submit']) && isset($_POST['title']) && isset($_POST['dec']) && isset($_POST['category']))
        {
            $getID = $_GET['edit_id'] ?? "";
            $img = $_FILES['img'] ?? "";
            $title = $_POST['title'] ?? "";
            $dec = $_POST['dec'] ?? "";
            $cate = $_POST['category'] ?? "";
            $error = User::updateContent($title, $dec, $img, $cate, $getID, $conn);
        }
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
            <?php include "temp/header.php" ?>

            <!-- Header -->
            <?php include "temp/sideheader.php" ?>

            <!-- Main Content -->
            <div class="cx-main-content">
                <div class="cx-breadcrumb">
                    <div class="cx-page-title cx-page-title-2">
                        <h5>Edit Course Content</h5>
                        <p class="<?= $error ? 'text-danger' : 'text-success' ?>"><?= $error ?></p>
                        <ul>
                            <li><a href="index.php">Dashboard</a></li>
                            <li>Edit Course Content</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="cx-card" id="assigntbl">
                            <div class="cx-vendor-upload-detail">
                                <form class="row g-3" method="POST" enctype="multipart/form-data">
									<div class="col-md-12">
                                        <label class="form-label">Select Category</label>
                                        <select class="form-control form-select" id="category" name="category" required>
											<option value="<?= $cate['category'] ?>"><?= $cate['category'] ?></option>
                                            <?php $categories = Operations::getESubCategory('course', $conn); foreach ($categories as $category) { ?>
                                                <option value="<?= $category['title'] ?>"><?= $category['title'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="slug" class="col-12 col-form-label">Title</label>
                                        <div class="col-12">
                                            <input id="slug" name="title" class="form-control here set-slug" type="text" value="<?= $cate['title'] ?>" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" type="text" rows="4" name="dec" required><?= $cate['dec'] ?></textarea>
                                    </div>
									<div class="col-md-12">
										<label for="Image" class="col-12 col-form-label">Upload Image</label>
										<div class="col-xxl-4 col-xl-6">
											<div class="sub-card cx-product-uploads m-b-30">
												<div class="cx-vendor-img-upload">
													<div class="cx-vendor-main-img">
														<div class="thumb-upload-set colo-md-12">
															<div class="thumb-upload m-0">
																<div class="thumb-edit">
																	<input type="file" id="thumbUpload03" class="cx-image-upload" name="img" accept="image/*">
																	<label><i class="ri-pencil-line"></i></label>
																</div>
																<div class="thumb-preview cx-preview">
																	<div class="image-thumb-preview">
																		<img class="image-thumb-preview cx-image-preview" src="<?= $cate['img'] ?>" alt="edit">
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
                                    <div class="col-md-12">
                                        <button type="submit" name="submit" class="cx-btn cx-btn-primary">Save</button>
                                    </div>
								</form>
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