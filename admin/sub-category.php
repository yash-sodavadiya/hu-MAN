<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="human - Admin Dashboard HTML Template.">

	<title>hu-MAN | Sub-Category</title>

	<!-- GOOGLE FONTS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

	<link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

	<!-- PLUGINS CSS STYLE -->
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
						<h1>Sub Category</h1>
						<p class="breadcrumbs"><span><a href="index.html">Home</a></span>
							<span><i class="mdi mdi-chevron-right"></i></span>Sub Category</p>
							<div>
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_sub_category">
						Add sub_category
					</button>
				</div>
					</div>
					<div class="row">
						
						<div class="col-xl-12 col-lg-12">
							<div class="ec-cat-list card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<table id="responsive-data-table" class="table">
											<thead>
												<tr>
													<th>Thumb</th>
													<th>Name</th>
													<th>Main Categories</th>
													<th>Product</th>
													<th>Total Sell</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
											</thead>

											<tbody>
												
											<?php
										$sql = "SELECT * FROM sub_category_tbl ";
										$result = mysqli_query($conn, $sql);
										foreach ($result as $row) { ?>
											<tr>
												<td><img class="cat-thumb"
														src="./assets/img/user/<?php echo $row['s_c_img'] ?>"
														alt="vendor image" /></td>
												<td>
													<?php echo $row['s_c_name'] ?>
												</td>
												<td>
													<?php echo $row['s_c_main_category'] ?>
												</td>
												<td>
													<?php echo $row['s_c_product'] ?>
												</td>
												<td>
													<?php echo $row['s_c_product'] ?>
												</td>
												<?php if ($row['s_c_status'] == "ACTIVE") { ?>
													<td><span class="mb-2 mr-2 badge badge-success">
															<?php echo $row['s_c_status'] ?>
														</span>
													</td>
												<?php } else { ?>
													<td><span class="mb-2 mr-2 badge badge-danger">
															<?php echo $row['s_c_status'] ?>
														</span></td>
												<?php } ?>
												<td> 
														<div class="action-icon">
														<div class="edit"><i class="fa-solid fa-pen"></i></div>
												
													<form action="php/sub_category_delete.php" method="post">
														<?php
														$cid = $row['s_c_id'];
														?>
														<input type="hidden" value="<?php echo $row['s_c_id'] ?>"
															name="scid">
														

															<!-- <div class="delete"><i class="fa-solid fa-trash"></i></div> -->
															<a href=""> <button type="submit" id="delete" name="submit" style="color : red"
																	value="Delete" onClick=”window.location.reload(true)”><i
																		class="fa-solid fa-trash"></button></i> </a>
														
													</form>	
</div>
													</td>
												

												</tr>
												
												<!-- <tr>
													<td><img class="cat-thumb" src="assets/img/category/watch.jpg" alt="product image" /></td>
													<td>smart watch</td>
													<td>
														<span class="ec-sub-cat-list">
															<span class="ec-sub-cat-tag">watch</span>
														</span>
													</td>
													<td>18</td>
													<td>1000</td>
													
													<td><span class="badge bg-success">ACTIVE</span></td>
													<td> 
														<div class="action-icon">
														<div class="edit"><i class="fa-solid fa-pen"></i></div>
													<div class="delete"><i class="fa-solid fa-trash"></i></div>
</div>
													</td>
												</tr> -->
												<?php } ?>
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
           <!-- Add sub_category Modal  -->
<div class="modal fade modal-add-contact" id="add_sub_category" tabindex="-1" role="dialog"
					aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<form action="php/add_sub_category.php" method="post" enctype="multipart/form-data">
								<div class="modal-header px-4">
									<h5 class="modal-title" id="exampleModalCenterTitle">Add New sub_category</h5>
								</div>

								<div class="modal-body px-4">
									<div class="form-group row mb-6">
										<label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">sub_Category
											Image: </label>


										<div class="col-sm-8 col-lg-10">
											<div class="custom-file mb-1">
												<input type="file" class="custom-file-input" id="coverImage" name="cat_img" required>
													<label class="custom-file-label" for="coverImage">Choose file...</label>
													<div class="invalid-feedback">Example invalid custom file feedback</div>
											</div>
										</div>
									</div>

									<div class="row mb-2">
										<div class="col-lg-6">
											<div class="form-group">
												<label for=" cat_name">Category name: </label>
												<input type="text" class="form-control" name="cat_name" id="cat_name" placeholder="Enter Name:">
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="cat_product">Product: </label>
												<input type="text" class="form-control" id="cat_product" name="cat_product" placeholder="Enter product number:">
											</div>
										</div>

									

										<div class="col-lg-12">
											<div class="form-group mb-4">
												<label for="main_category">main_category</label>
												<select name="main_category" id="main_category" class="form-control">
													<option value="">Please select main_category...</option>
													<option value="Clothes">Clothes</option>
													<option value="watch">watch</option>
													<option value="Footwear">Footwear</option>
													
												</select>
											</div>
										</div>

										


									</div>
								</div>

								<div class="modal-footer px-4">
									<button type="button" class="btn btn-secondary btn-pill"
										data-bs-dismiss="modal">Cancel</button>
									<button type="submit" name="save" class="btn btn-primary btn-pill">Save</button>
								</div>
							</form>
						</div>
					</div>
				</div>
		</div > 
		<!-- < !--End Content-- > -->
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

</html>