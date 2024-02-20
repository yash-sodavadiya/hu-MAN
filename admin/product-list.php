<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v37/ekka-admin/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jan 2024 06:15:58 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Ekka - Admin Dashboard HTML Template.">

	<title>hu-MAN | Product List</title>

	<!-- GOOGLE FONTS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

	<link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

	<!-- PLUGINS CSS STYLE -->
	<link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

	<!-- No Extra plugin used -->

	<link href='assets/plugins/data-tables/datatables.bootstrap5.min.css' rel='stylesheet'>
	<link href='assets/plugins/data-tables/responsive.datatables.min.css' rel='stylesheet'>

	<!-- ekka CSS -->
	<link id="ekka-css" rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>" />

	<!-- FAVICON -->
	<link href="assets/img/favicon.png" rel="shortcut icon" />
</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">

<?php require("components/navbar.php") ?>
			<!-- CONTENT WRAPPER -->
			<div class="ec-content-wrapper">
				<div class="content">
					<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h1>Product</h1>
							<p class="breadcrumbs"><span><a href="index.html">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Product</p>
						</div>
						<div>
							<a href="product-list.html" class="btn btn-primary"> Add Porduct</a>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<table id="responsive-data-table" class="table"
											style="width:100%">
											<thead>
												<tr>
													<th>Product</th>
													<th>Name</th>
													<th>Price</th>
													<th>Offer</th>
													<th>Purchased</th>
													<th>Stock</th>
													<th>Status</th>
													<th>Date</th>
													<th>Action</th>
												</tr>
											</thead>

											<tbody>
												
												<tr>
													<td><img class="tbl-thumb" src="assets/img/products/p2.jpg" alt="Product Image" /></td>
													<td>Full Sleeve Cap T-Shirt</td>
													<td>₹1000</td>
													<td>30% OFF</td>
													<td>80</td>
													<td>200</td>
													<td>ACTIVE</td>
													<td>01/01/2024/td>
													<td>
														<div class="action-icon">
														<div class="edit"><i class="fa-solid fa-pen"></i></div>
													<div class="delete"><i class="fa-solid fa-trash"></i></div>
</div>
													</td>
												</tr>

												<tr>
													<td><img class="tbl-thumb" src="assets/img/products/p3.jpg" alt="Product Image" /></td>
													<td>Full Sleeve T-Shirt</td>
													<td>₹800</td>
													<td>20% OFF</td>
													<td>100</td>
													<td>280</td>
													<td>ACTIVE</td>
													<td>01/01/2024</td>
													<td>
														<div class="action-icon">
														<div class="edit"><i class="fa-solid fa-pen"></i></div>
													<div class="delete"><i class="fa-solid fa-trash"></i></div>
</div>
													</td>
												</tr>

												

												<tr>
													<td><img class="tbl-thumb" src="assets/img/products/p7.jpg" alt="Product Image" /></td>
													<td>Shirt For Men</td>
													<td>₹1200</td>
													<td>30% OFF</td>
													<td>300</td>
													<td>700</td>
													<td>ACTIVE</td>
													<td>01/01/2024</td>
													<td>
														<div class="action-icon">
														<div class="edit"><i class="fa-solid fa-pen"></i></div>
													<div class="delete"><i class="fa-solid fa-trash"></i></div>
</div>
													</td>
												</tr>

												<tr>
													<td><img class="tbl-thumb" src="assets/img/products/p8.jpg" alt="Product Image" /></td>
													<td>Digital Watch</td>
													<td>₹5000</td>
													<td>50% OFF</td>
													<td>250</td>
													<td>1000</td>
													<td>ACTIVE</td>
													<td>10/10/2024</td>
													<td>
														<div class="action-icon">
														<div class="edit"><i class="fa-solid fa-pen"></i></div>
													<div class="delete"><i class="fa-solid fa-trash"></i></div>
</div>
													</td>
												</tr>

												<tr>
													<td><img class="tbl-thumb" src="assets/img/products/p10.jpg" alt="Product Image" /></td>
													<td>Green shoes for Men</td>
													<td>₹1500</td>
													<td>40% OFF</td>
													<td>350</td>
													<td>200</td>
													<td>ACTIVE</td>
													<td>01/01/2024/td>
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
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>

	<!-- Datatables -->
	<script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.responsive.min.js'></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v37/ekka-admin/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jan 2024 06:16:02 GMT -->
</html>