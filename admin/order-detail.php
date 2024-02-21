<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/human/human-v37/human-admin/order-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jan 2024 06:16:05 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="human - Admin Dashboard HTML Template.">

	<title>hu-MAN | Order-detail</title>

	<!-- GOOGLE FONTS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

	<link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

	<!-- PLUGINS CSS STYLE -->
	<link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

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
					<div class="breadcrumb-wrapper breadcrumb-wrapper-2">
						<h1>Order Detail</h1>
						<p class="breadcrumbs"><span><a href="index.html">Home</a></span>
							<span><i class="mdi mdi-chevron-right"></i></span>Orders
						</p>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="ec-odr-dtl card card-default">
								<div class="card-header card-header-border-bottom d-flex justify-content-between">
									<h2 class="ec-odr">Order Detail<br>
										<span class="small">Order ID: #1082</span>
									</h2>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-xl-3 col-lg-6">
											<address class="info-grid">
												<div class="info-title"><strong>Customer:</strong></div><br>
												<div class="info-content">
													Twitter, Inc.<br>
													795 Folsom Ave, Suite 600<br>
													San Francisco, CA 94107<br>
													<abbr title="Phone">P:</abbr> (123) 456-7890
												</div>
											</address>
										</div>
										<div class="col-xl-3 col-lg-6">
											<address class="info-grid">
												<div class="info-title"><strong>Shipped To:</strong></div><br>
												<div class="info-content">
													Elaine Hernandez<br>
													P. Sherman 42,<br>
													Wallaby Way, Sidney<br>
													<abbr title="Phone">P:</abbr> (123) 345-6789
												</div>
											</address>
										</div>
										<div class="col-xl-3 col-lg-6">
											<address class="info-grid">
												<div class="info-title"><strong>Payment Method:</strong></div><br>
												<div class="info-content">
													Visa ending **** 1234<br>
													h.elaine@gmail.com<br>
												</div>
											</address>
										</div>
										<div class="col-xl-3 col-lg-6">
											<address class="info-grid">
												<div class="info-title"><strong>Order Date:</strong></div><br>
												<div class="info-content">
													4:34PM,<br>
													Wed, Aug 13, 2020
												</div>
											</address>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<h3 class="tbl-title">PRODUCT SUMMARY</h3>
											<div class="table-responsive">
												<table class="table table-striped o-tbl">
													<thead>
														<tr class="line">
															<td><strong>#</strong></td>
															<td class="text-center"><strong>IMAGE</strong></td>
															<td class="text-center"><strong>PRODUCT</strong></td>
															<td class="text-center"><strong>PRICE/UNIT</strong></td>
															<td class="text-right"><strong>QUANTITY</strong></td>
															<td class="text-right"><strong>SUBTOTAL</strong></td>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td><img class="product-img"
																	src="assets/img/products/p1.jpg" alt="" /></td>
															<td><strong>Baby Pink Shoes</strong><br>a vary smooth and
																comfert Shoes ever for baby.</td>
															<td class="text-center">15</td>
															<td class="text-center">$75</td>
															<td class="text-right">$1,125.00</td>
														</tr>
														<tr>
															<td>2</td>
															<td><img class="product-img"
																	src="assets/img/products/p2.jpg" alt="" /></td>
															<td><strong>Tee-Shirt For Men</strong><br>Classie and full
																slive tee-shirt for boy or man.</td>
															<td class="text-center">15</td>
															<td class="text-center">$75</td>
															<td class="text-right">$1,125.00</td>
														</tr>
														<tr class="line">
															<td>3</td>
															<td><img class="product-img"
																	src="assets/img/products/p4.jpg" alt="" /></td>
															<td><strong>Round Cap</strong><br>Comfertable round cut cap
																for both.</td>
															<td class="text-center">2</td>
															<td class="text-center">$75</td>
															<td class="text-right">$150.00</td>
														</tr>
														<tr>
															<td colspan="4"></td>
															<td class="text-right"><strong>Taxes</strong></td>
															<td class="text-right"><strong>N/A</strong></td>
														</tr>
														<tr>
															<td colspan="4">
															</td>
															<td class="text-right"><strong>Total</strong></td>
															<td class="text-right"><strong>$2,400.00</strong></td>
														</tr>

														<tr>
															<td colspan="4">
															</td>
															<td class="text-right"><strong>Payment Status</strong></td>
															<td class="text-right"><strong>PAID</strong></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Tracking Detail -->
							<div class="card mt-4 trk-order">
								<div class="p-4 text-center text-white text-lg bg-dark rounded-top">
									<span class="text-uppercase">Tracking Order No - </span>
									<span class="text-medium">34VB5540K83</span>
								</div>
								<div
									class="d-flex flex-wrap flex-sm-nowrap justify-content-between py-3 px-2 bg-secondary">
									<div class="w-100 text-center py-1 px-2"><span class="text-medium">Shipped
											Via:</span> UPS Ground</div>
									<div class="w-100 text-center py-1 px-2"><span class="text-medium">Status:</span>
										Checking Quality</div>
									<div class="w-100 text-center py-1 px-2"><span class="text-medium">Expected
											Date:</span> DEC 09, 2021</div>
								</div>
								<div class="card-body">
									<div
										class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
										<div class="step completed">
											<div class="step-icon-wrap">
												<div class="step-icon"><i class="mdi mdi-cart"></i></div>
											</div>
											<h4 class="step-title">Confirmed Order</h4>
										</div>
										<div class="step completed">
											<div class="step-icon-wrap">
												<div class="step-icon"><i class="mdi mdi-tumblr-reblog"></i></div>
											</div>
											<h4 class="step-title">Processing Order</h4>
										</div>
										<div class="step completed">
											<div class="step-icon-wrap">
												<div class="step-icon"><i class="mdi mdi-gift"></i></div>
											</div>
											<h4 class="step-title">Product Dispatched</h4>
										</div>
										<div class="step">
											<div class="step-icon-wrap">
												<div class="step-icon"><i class="mdi mdi-truck-delivery"></i></div>
											</div>
											<h4 class="step-title">On Delivery</h4>
										</div>
										<div class="step">
											<div class="step-icon-wrap">
												<div class="step-icon"><i class="mdi mdi-hail"></i></div>
											</div>
											<h4 class="step-title">Product Delivered</h4>
										</div>
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

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- human Custom -->
	<script src="assets/js/human.js"></script>
</body>


<!-- Mirrored from maraviyainfotech.com/projects/human/human-v37/human-admin/order-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jan 2024 06:16:05 GMT -->
</html>