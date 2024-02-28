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
                        <form action="php/edit_employee.php" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <?php
                                if (isset($_POST['update_submit'])) {
                                    $emp_id = $_POST['emp_id'];
                                    $sql = "SELECT * FROM `emp_tbl` where `emp_id` = $emp_id";
                                    $result = mysqli_query($conn, $sql);
                                    foreach ($result as $row) { ?>

                                        <div class="row ec-vendor-uploads">
                                            <div class="col-lg-4">
                                                <div class="ec-vendor-img-upload">
                                                    <div class="ec-vendor-main-img">
                                                        <div class="avatar-upload">
                                                            <div class="avatar-edit">
                                                                <input type='file' id="imageUpload" class="ec-image-upload"
                                                                    accept=".png, .jpg, .jpeg" name="p_image"
                                                                    value="<?php echo $row['emp_img'] ?>" />
                                                                <label for="imageUpload"><img src="assets/img/icons/edit.svg"
                                                                        class="svg_img header_svg" alt="edit" /></label>
                                                            </div>
                                                            <div class="avatar-preview ec-preview">
                                                                <div class="imagePreview ec-div-preview">
                                                                    <img class="ec-image-preview"
                                                                        src="assets/img/user/<?php echo $row['emp_img'] ?>"
                                                                        alt="edit" />
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
                                                        <label for="inputEmail4" class="form-label">Employee name</label>
                                                        <input type="text" class="form-control slug-title" id="inputEmail4"
                                                            name="emp_name" value="<?php echo $row['emp_name'] ?>">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="form-label">Employee Email </label>
                                                        <input type="text" class="form-control" id="emp_email" name="emp_email"
                                                            value="<?php echo $row['emp_email'] ?>">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="form-label">Phone No. </label>
                                                        <input type="number" class="form-control" id="emp_phone"
                                                            name="emp_phone" value="<?php echo $row['emp_phone'] ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Designation </label>
                                                        <input type="text" class="form-control" id="role" name="role"
                                                            value="<?php echo $row['role'] ?>">
                                                    </div>
                                                </div>



                                                <input type="hidden" name="emp_id" value="<?php echo $row['emp_id'] ?>">


                                                <div class="col-md-12" style="margin:10px">
                                                    <button type="submit" class="btn btn-primary"
                                                        name="edit_employee">Save</button>
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