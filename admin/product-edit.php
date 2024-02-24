<!DOCTYPE html>
<html lang="en" dir="ltr">

<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="human - Admin Dashboard HTML Template.">

<title>hu-MAN | Product-Add</title>

<!-- GOOGLE FONTS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap"
    rel="stylesheet">

<link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css"
    rel="stylesheet" />

<!-- PLUGINS CSS STYLE -->
<link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

<!-- human CSS -->
<link id="human-css" rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>" />

<!-- FAVICON -->
<link href="assets/img/favicon.png" rel="shortcut icon" />

</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">

    <!-- WRAPPER -->
    <?php require("components/navbar.php") ?>
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Edit Product</h1>
                    <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Product
                    </p>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-header card-header-border-bottom">
                            <h2>Edit Product</h2>
                        </div>
                        <form action="php/edit_product.php" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <?php
                                if (isset($_POST['submit'])) {
                                    $pid = $_POST['pid'];
                                    $tbl = $_POST['tbl'];
                                    $sql = "SELECT * FROM `$tbl` where `p_id` = $pid";
                                    $result = mysqli_query($conn, $sql);
                                    foreach ($result as $row) { ?>

                                        <div class="row ec-vendor-uploads">
                                            <div class="col-lg-4">
                                                <div class="ec-vendor-img-upload">
                                                    <div class="ec-vendor-main-img">
                                                        <div class="avatar-upload">
                                                            <div class="avatar-edit">
                                                                <input type='file' id="imageUpload" class="ec-image-upload"
                                                                    accept=".png, .jpg, .jpeg" name="p_image" />
                                                                <label for="imageUpload"><img src="assets/img/icons/edit.svg"
                                                                        class="svg_img header_svg" alt="edit" /></label>
                                                            </div>
                                                            <div class="avatar-preview ec-preview">
                                                                <div class="imagePreview ec-div-preview">
                                                                    <img class="ec-image-preview"
                                                                        src="assets/img/product/<?php echo $row['p_image'] ?>"
                                                                        alt="edit" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="thumb-upload-set colo-md-12">
                                                            <div class="thumb-upload">
                                                                <div class="thumb-edit">
                                                                    <input type='file' id="thumbUpload01"
                                                                        class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                                    <label for="imageUpload"><img
                                                                            src="assets/img/icons/edit.svg"
                                                                            class="svg_img header_svg" alt="edit" /></label>
                                                                </div>
                                                                <div class="thumb-preview ec-preview">
                                                                    <div class="image-thumb-preview">
                                                                        <img class="image-thumb-preview ec-image-preview"
                                                                            src="assets/img/products/vender-upload-thumb-preview.jpg"
                                                                            alt="edit" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="thumb-upload">
                                                                <div class="thumb-edit">
                                                                    <input type='file' id="thumbUpload02"
                                                                        class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                                    <label for="imageUpload"><img
                                                                            src="assets/img/icons/edit.svg"
                                                                            class="svg_img header_svg" alt="edit" /></label>
                                                                </div>
                                                                <div class="thumb-preview ec-preview">
                                                                    <div class="image-thumb-preview">
                                                                        <img class="image-thumb-preview ec-image-preview"
                                                                            src="assets/img/products/vender-upload-thumb-preview.jpg"
                                                                            alt="edit" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="thumb-upload">
                                                                <div class="thumb-edit">
                                                                    <input type='file' id="thumbUpload03"
                                                                        class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                                    <label for="imageUpload"><img
                                                                            src="assets/img/icons/edit.svg"
                                                                            class="svg_img header_svg" alt="edit" /></label>
                                                                </div>
                                                                <div class="thumb-preview ec-preview">
                                                                    <div class="image-thumb-preview">
                                                                        <img class="image-thumb-preview ec-image-preview"
                                                                            src="assets/img/products/vender-upload-thumb-preview.jpg"
                                                                            alt="edit" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="thumb-upload">
                                                                <div class="thumb-edit">
                                                                    <input type='file' id="thumbUpload04"
                                                                        class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                                    <label for="imageUpload"><img
                                                                            src="assets/img/icons/edit.svg"
                                                                            class="svg_img header_svg" alt="edit" /></label>
                                                                </div>
                                                                <div class="thumb-preview ec-preview">
                                                                    <div class="image-thumb-preview">
                                                                        <img class="image-thumb-preview ec-image-preview"
                                                                            src="assets/img/products/vender-upload-thumb-preview.jpg"
                                                                            alt="edit" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="thumb-upload">
                                                                <div class="thumb-edit">
                                                                    <input type='file' id="thumbUpload05"
                                                                        class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                                    <label for="imageUpload"><img
                                                                            src="assets/img/icons/edit.svg"
                                                                            class="svg_img header_svg" alt="edit" /></label>
                                                                </div>
                                                                <div class="thumb-preview ec-preview">
                                                                    <div class="image-thumb-preview">
                                                                        <img class="image-thumb-preview ec-image-preview"
                                                                            src="assets/img/products/vender-upload-thumb-preview.jpg"
                                                                            alt="edit" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="thumb-upload">
                                                                <div class="thumb-edit">
                                                                    <input type='file' id="thumbUpload06"
                                                                        class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                                    <label for="imageUpload"><img
                                                                            src="assets/img/icons/edit.svg"
                                                                            class="svg_img header_svg" alt="edit" /></label>
                                                                </div>
                                                                <div class="thumb-preview ec-preview">
                                                                    <div class="image-thumb-preview">
                                                                        <img class="image-thumb-preview ec-image-preview"
                                                                            src="assets/img/products/vender-upload-thumb-preview.jpg"
                                                                            alt="edit" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="ec-vendor-upload-detail">
                                                    <div class="row g-3 form">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="inputEmail4" class="form-label">Product name</label>
                                                                <input type="text" class="form-control slug-title"
                                                                    id="inputEmail4" name="p_name"
                                                                    value="<?php echo $row['p_name'] ?>">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label">Categories</label>
                                                                <select name="categories" id="Categories" class="form-select">
                                                                    <option selected value="<?php echo $row['p_catagory'] ?>">
                                                                        <?php echo $row['p_catagory'] ?>
                                                                    </option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label class="form-label">Price <span>( In INR
                                                                        )</span></label>
                                                                <input type="number" class="form-control" id="mrp" name="p_mrp"
                                                                    value="<?php echo $row['p_mrp'] ?>">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label">Final Price</label>
                                                                <input type="number" class="form-control" id="final_price"
                                                                    name="p_final_price"
                                                                    value="<?php echo $row['p_final_price'] ?>">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <label class="form-label">Stock </label>
                                                            <input type="number" class="form-control" id="stock" name="p_stock"
                                                                value="<?php echo $row['p_stock'] ?>">
                                                        </div>

                                                        <!-- shirt details start  -->
                                                        
                                                        <?php 
                                                            if($row['p_catagory'] == "shirt")
                                                            {?>
                                                                <div class="row">
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Pattern</label>
                                                                    <input type="text" class="form-control" id="c_pattern"
                                                                        name="c_pattern"
                                                                        value="<?php echo $row['c_pattern'] ?>">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Material type</label>
                                                                    <input type="text" class="form-control" id="s_material_type"
                                                                        name="s_material_type"
                                                                        value="<?php echo $row['s_material_type'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Sleeve Type</label>
                                                                    <input type="text" class="form-control" id="c_sleeve_type"
                                                                        name="c_sleeve_type"
                                                                        value="<?php echo $row['c_sleeve_type'] ?>">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Length</label>
                                                                    <input type="text" class="form-control" id="c_length"
                                                                        name="c_length" value="<?php echo $row['c_length'] ?>">
                                                                </div>
                                                            </div>



                                                            <?php }
                                                            else if($row['p_catagory'] == "pent")
                                                            {?>
                                                            <div class="row">

                                                                <div class="col-md-6">
                                                                    <label class="form-label">Material type</label>
                                                                    <input type="text" class="form-control" id="p_material_type"
                                                                        name="p_material_type"
                                                                        value="<?php echo $row['p_material_type'] ?>">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Length</label>
                                                                    <input type="text" class="form-control" id="p_pattern"
                                                                        name="p_length" value="<?php echo $row['p_length'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Style</label>
                                                                    <input type="text" class="form-control" id="p_style"
                                                                        name="p_style" value="<?php echo $row['p_style'] ?>">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Closure type</label>
                                                                    <input type="text" class="form-control" id="p_closure_type"
                                                                        name="p_closure_type"
                                                                        value="<?php echo $row['p_closure_type'] ?>">
                                                                </div>
                                                            </div>

                                                            <!-- pent discription end  -->
                                                            <?php }?>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label class="form-label">Sort Description</label>
                                                            <textarea class="form-control" rows="2" name="short_description"
                                                                ><?php echo $row['p_description2'] ?></textarea>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label class="form-label">Full Detail</label>
                                                            <textarea class="form-control" rows="4" name="long_description"
                                                                ><?php echo $row['p_description1'] ?></textarea>
                                                        </div>
                                                        <!-- pent details end  -->
                                                        
                                                        <div class="col-md-12" style="margin:10px">
                                                            <button type="submit" class="btn btn-primary"
                                                                name="add_product">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    <?php }

                                }

                                ?>
            </div>
        </div>
    </div>
    </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->



    <!-- Footer -->
    <?php require("components/footer.php") ?>

    </div> <!-- End Page Wrapper -->
    </div> <!-- End Wrapper -->

    <!-- Common Javascript -->
    <script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/tags-input/bootstrap-tagsinput.js"></script>
    <script src="assets/plugins/simplebar/simplebar.min.js"></script>
    <script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
    <script src="assets/plugins/slick/slick.min.js"></script>

    <!-- Option Switcher -->
    <script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

    <!-- human Custom -->
    <script src="assets/js/human.js"></script>

    <script>
        // Get reference to the dropdown
        const dropdown = document.getElementById('Categories');

        // Add event listener to detect changes
        dropdown.addEventListener('change', function () {
            // Get the selected value
            const selectedValue = dropdown.value;

            // Get reference to the output div
            // const output = document.getElementById('output');

            // Modify the output based on the selected value
            switch (selectedValue) {
                case 'shirt':
                    $("#shirt_output").show();
                    $("#pent_output").hide();

                    break;
                case 'pent':
                    $("#pent_output").show();
                    $("#shirt_output").hide();
                    break;
                case 'option3':
                    output.textContent = 'You selected Option 3';
                    break;
                default:
                    output.textContent = 'Invalid option';
            }
        });
    </script>

</body>

</html>