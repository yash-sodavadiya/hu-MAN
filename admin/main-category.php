<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/human/human-v37/human-admin/main-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jan 2024 06:15:56 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="human - Admin Dashboard HTML Template.">

	<title>hu-MAN | Main-Category</title>

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

	<link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

	<!-- PLUGINS CSS STYLE -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />	

	<!-- Data Tables -->
	<link href='assets/plugins/data-tables/datatables.bootstrap5.min.css' rel='stylesheet'>
	<link href='assets/plugins/data-tables/responsive.datatables.min.css' rel='stylesheet'>

	<!-- human CSS -->
	<link id="human-css" rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>" />

	<!-- FAVICON -->
	<link href="assets/img/favicon.png" rel="shortcut icon" />
</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">

<?php require("components/navbar.php") ?>
			<!-- CONTENT WRAPPER -->
			<div class="ec-content-wrapper">
				<div class="content">
					<div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
							<h1>Main Category</h1>
							<p class="breadcrumbs"><span><a href="index.html">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Main Category</p>
					</div>
					<div class="row">
					<div class="col-xl-4 col-lg-12">
							<div class="ec-cat-list card card-default mb-24px">
								<div class="card-body">
									<div class="ec-cat-form">
										<h4>Add New Category</h4>

										<form action="php/add_m_category.php" method="post" enctype="multipart/form-data">

										<div class="form-group row mb-6">
										<label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">Main Category
											Image: </label>


										<div class="col-sm-8 col-lg-10">
											<div class="custom-file mb-1">
												<input type="file" class="custom-file-input" id="coverImage" name="m_c_img" required>
													<label class="custom-file-label" for="coverImage">Choose file...</label>
													<div class="invalid-feedback">Example invalid custom file feedback</div>
											</div>
										</div>
									</div>
											<div class="form-group row">
												<label for="text" class="col-12 col-form-label">Main Category Name</label> 
												<div class="col-12">
													<input id="text" name="m_c_name" class="form-control here slug-title" type="text">
												</div>
											</div>

											

											<div class="row">
												<div class="col-12">
													<button name="submit" type="submit" class="btn btn-primary">Submit</button>
												</div>
											</div>

										</form>

									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-8 col-lg-12">
							<div class="ec-cat-list card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<table id="responsive-data-table" class="table">
											<thead>
												<tr>
													<th>Thumb</th>
													<th>Name</th>
													<th>Sub Categories</th>
													<th>Product</th>
													<th>Status</th>
													
													<th>Action</th>
												</tr>
											</thead>

											<tbody>
												<?php
													$sql = "SELECT * FROM `main_category_tbl`";
													$result = mysqli_query($conn,$sql);
													foreach($result as $row){ ?>

														<tr>
													<td><img class="cat-thumb" src="assets/img/category/<?php echo $row['m_c_img'] ?>" alt="Product Image" /></td>
													<td><?php echo $row['m_c_name'] ?></td>
													<td>
														<span class="ec-sub-cat-list">
														<?php 
    $m_c_name = $row['m_c_name'];
    $sql2 = "SELECT COUNT(*) as count FROM `sub_category_tbl` WHERE `s_c_main_category` = '$m_c_name'";
    $result2 = mysqli_query($conn, $sql2);

    if ($result2) {
        $row2 = mysqli_fetch_assoc($result2);
        $rowcount = $row2['count'];
        mysqli_free_result($result2); // Free the result set
    } else {
        // Handle query error
        $rowcount = 0; // Set default count to 0
    }
?>
<span class="ec-sub-cat-count" title="Total Sub Categories"><?php echo $rowcount; ?></span>

															<?php
															$main_category = $row['m_c_name'];
$sql1 = "SELECT * FROM `sub_category_tbl` WHERE `s_c_main_category` = '$main_category'";
$result1 = mysqli_query($conn, $sql1);
foreach($result1 as $row1)
{ ?>

<span class="ec-sub-cat-tag"><?php echo $row1['s_c_name']; ?></span>
<?php }



?>

															
														</span>
													</td>
													<td>30</td>
													<td>ACTIVE</td>
												
													<td>
													<div class="action-icon">
														<div class="edit"><i class="fa-solid fa-pen"></i></div>
														<form action="php/main_category_delete.php" method="post">
														<?php
														$cid = $row['m_c_id'];
														?>
														<input type="hidden" value="<?php echo $row['m_c_id'] ?>"
															name="scid">
														<input type="hidden" value="<?php echo $row['m_c_name'] ?>"
															name="scname">
														

															<!-- <div class="delete"><i class="fa-solid fa-trash"></i></div> -->
															<a href=""> <button type="submit" id="delete" name="submit" style="color : red"
																	value="Delete" onClick=”window.location.reload(true)”><i
																		class="fa-solid fa-trash"></button></i> </a>
														
													</form>	
</div>
													</td>
												</tr>
												<?php	}
												?>
												
												
											</tbody>
										</table>
									</div>
								</div>
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

	<!-- Data Tables -->
	<script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.responsive.min.js'></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- human Custom -->
	<script src="assets/js/human.js"></script>
</body>

<!-- Mirrored from maraviyainfotech.com/projects/human/human-v37/human-admin/main-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jan 2024 06:15:57 GMT -->
</html>