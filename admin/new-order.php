<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v37/ekka-admin/new-order.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jan 2024 06:16:04 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Ekka - Admin Dashboard HTML Template.">

	<title>hu-MAN | New-Order</title>

	<!-- GOOGLE FONTS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

	<link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

	<!-- PLUGINS CSS STYLE -->
	<link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

	<!-- Data-Tables -->
	<link href='assets/plugins/data-tables/datatables.bootstrap5.min.css' rel='stylesheet'>
	<link href='assets/plugins/data-tables/responsive.datatables.min.css' rel='stylesheet'>

	<!-- Ekka CSS -->
	<link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css?v=<?php echo time(); ?>" />

	<!-- FAVICON -->
	<link href="assets/img/favicon.png" rel="shortcut icon" />
</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">

<?php require("components/navbar.php") ?>

			<!-- CONTENT WRAPPER -->
			<div class="ec-content-wrapper">
				<div class="content">
					<div class="breadcrumb-wrapper breadcrumb-wrapper-2">
						<h1>New Orders</h1>
						<p class="breadcrumbs"><span><a href="index.html">Home</a></span>
							<span><i class="mdi mdi-chevron-right"></i></span>Orders
						</p>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<table id="responsive-data-table" class="table" style="width:100%">
											<thead>
												<tr>
													<th>ID</th>
													<th>Item</th>
													<th>Name</th>
													<th>Customer</th>
													<th>Items</th>
													<th>Price</th>
													<th>Payment</th>
													<th>Status</th>
													<th>Date</th>
													<th>Action</th>
												</tr>
											</thead>

											<tbody>
												
												<tr>
													<td>01</td>
													<td><img class="product-img tbl-img" src="assets/img/products/p2.jpg" alt="product"></td>
													<td>Tee-Shirt For Men</td>
													<td><strong>smit ranpariya</strong><br>
														smit4@gmai.com
													</td>
													<td>1</td>
													<td>₹1000</td>
													<td>COD</td>
													<td><span class="mb-2 mr-2 badge badge-warning">Redy To Ship</span>
													</td>
													<td>01/01/2024</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												
												
												
												
												<tr>
													<td>02</td>
													<td><img class="product-img tbl-img" src="assets/img/products/p7.jpg" alt="product"></td>
													<td>Mens Shirt</td>
													<td><strong>meet goti</strong><br>
														meet23224@gmail.com
													</td>
													<td>10</td>
													<td>₹20000</td>
													<td>COD</td>
													<td><span class="mb-2 mr-2 badge badge-warning">Redy To Ship</span>
													</td>
													<td>10/10/2024</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>03</td>
													<td><img class="product-img tbl-img" src="assets/img/products/p8.jpg" alt="product"></td>
													<td>Smart Watch</td>
													<td><strong>raj shsh</strong><br>
														raj@gmail.com
													</td>
													<td>10</td>
													<td>₹12456</td>
													<td>COD</td>
													<td><span class="mb-2 mr-2 badge badge-warning">Redy To Ship</span>
													</td>
													<td01/>01/2024</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>04</td>
													<td><img class="product-img tbl-img" src="assets/img/products/p9.jpg" alt="product"></td>
													<td>Tee-Shirt For Men</td>
													<td><strong>Hardik Patel</strong><br>
														patel000777@gmail.com
													</td>
													<td>2</td>
													<td>₹4000</td>
													<td>PAID</td>
													<td><span class="mb-2 mr-2 badge badge-info">On The Way</span>
													</td>
													<td>10/10/2024</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>05</td>
													<td><img class="product-img tbl-img" src="assets/img/products/p10.jpg" alt="product"></td>
													<td>Men casual shoes</td>
													<td><strong>smit</strong><br>
														smit@gmail.com
													</td>
													<td>5</td>
													<td>₹2355</td>
													<td>COD</td>
													<td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
													</td>
													<td>0/10/2024</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
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
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>

	<!-- Data-Tables -->
	<script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.responsive.min.js'></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v37/ekka-admin/new-order.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jan 2024 06:16:04 GMT -->
</html>