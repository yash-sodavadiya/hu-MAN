<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v37/ekka-admin/main-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jan 2024 06:15:56 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Ekka - Admin Dashboard HTML Template.">

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

	<!-- ekka CSS -->
	<link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css?v=<?php echo time(); ?>" />

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
						
						<div class="col-xl-12 col-lg-12">
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
													<th>Total Sell</th>
													<th>Status</th>
													<th>Trending</th>
													<th>Action</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td><img class="cat-thumb" src="assets/img/category/clothes.png" alt="Product Image" /></td>
													<td>Clothes</td>
													<td>
														<span class="ec-sub-cat-list">
														<span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
														<span class="ec-sub-cat-tag">suit</span>
														<span class="ec-sub-cat-tag">Shirt</span>
														<span class="ec-sub-cat-tag">Dress</span>
														<span class="ec-sub-cat-tag">Jeans</span>
														</span>
													</td>
													<td>25</td>
													<td>200</td>
													<td>ACTIVE</td>
													<td><span class="badge badge-success">Top</span></td>
													<td>
													<div class="action-icon">
														<div class="edit"><i class="fa-solid fa-pen"></i></div>
													<div class="delete"><i class="fa-solid fa-trash"></i></div>
</div>
													</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/category/footwear.png" alt="Product Image" /></td>
													<td>Footwear</td>
													<td>
														<span class="ec-sub-cat-list">
															<span class="ec-sub-cat-count" title="Total Sub Categories">3</span>
															<span class="ec-sub-cat-tag">Casual</span>
															<span class="ec-sub-cat-tag">safety shoes </span>
															<span class="ec-sub-cat-tag">formal</span>
														</span>
													</td>
													<td>30</td>
													<td>1000</td>
													<td>ACTIVE</td>
													<td><span class="badge bg-primary">Medium</span></td>
													<td>
													<div class="action-icon">
														<div class="edit"><i class="fa-solid fa-pen"></i></div>
													<div class="delete"><i class="fa-solid fa-trash"></i></div>
</div>
													</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/category/watch.jpg" alt="Product Image" /></td>
													<td>watch</td>
													<td>
														<span class="ec-sub-cat-list">
															<span class="ec-sub-cat-count" title="Total Sub Categories">2</span>
															<span class="ec-sub-cat-tag">smart</span>
															<span class="ec-sub-cat-tag">tredition</span>
															
														
														</span>
													</td>
													<td>18</td>
													<td>1061</td>
													<td>ACTIVE</td>
													<td><span class="badge bg-danger">Low</span></td>
													<td>
														<div class="action-icon">
														<div class="edit"><i class="fa-solid fa-pen"></i></div>
													<div class="delete"><i class="fa-solid fa-trash"></i></div>
</div>
													</td>
												</tr>
												
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

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>

<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v37/ekka-admin/main-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jan 2024 06:15:57 GMT -->
</html>