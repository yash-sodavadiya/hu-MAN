<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="human - Admin Dashboard HTML Template.">

	<title>hu-MAN | Product-detail</title>

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

	<link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
	integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
	crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- PLUGINS CSS STYLE -->
	<link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />
	<link href='assets/plugins/slick/slick.min.css' rel='stylesheet'>
	<link href='assets/plugins/swiper/swiper-bundle.min.css' rel='stylesheet'>

	<!-- human CSS -->
	<link id="human-css" rel="stylesheet" href="assets/css/style.css" />

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
							<h1>Product Detail</h1>
							<p class="breadcrumbs"><span><a href="index.html">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Product
							</p>
						</div>
						<div>
							<a href="product-list.html" class="btn btn-primary"> Edit
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-header card-header-border-bottom">
									<h2>Product Detail</h2>
								</div>

								<div class="card-body product-detail">
									<div class="row">
										<div class="col-xl-5 col-lg-4">
											<div class="row">
												<div class="single-pro-img">
													<div class="single-product-scroll">
														<div class="single-product-cover">
															<div class="single-slide zoom-image-hover">
																<img class="img-responsive"
																	src="assets/img/products/pd_1.jpg" alt="">
															</div>
															<div class="single-slide zoom-image-hover">
																<img class="img-responsive"
																	src="assets/img/products/pd_2.jpg" alt="">
															</div>
															<div class="single-slide zoom-image-hover">
																<img class="img-responsive"
																	src="assets/img/products/pd_3.jpg" alt="">
															</div>
															<div class="single-slide zoom-image-hover">
																<img class="img-responsive"
																	src="assets/img/products/pd_4.jpg" alt="">
															</div>
															<div class="single-slide zoom-image-hover">
																<img class="img-responsive"
																	src="assets/img/products/pd_5.jpg" alt="">
															</div>
														</div>
														<div class="single-nav-thumb">
															<div class="single-slide">
																<img class="img-responsive"
																	src="assets/img/products/pd_1.jpg" alt="">
															</div>
															<div class="single-slide">
																<img class="img-responsive"
																	src="assets/img/products/pd_2.jpg" alt="">
															</div>
															<div class="single-slide">
																<img class="img-responsive"
																	src="assets/img/products/pd_3.jpg" alt="">
															</div>
															<div class="single-slide">
																<img class="img-responsive"
																	src="assets/img/products/pd_4.jpg" alt="">
															</div>
															<div class="single-slide">
																<img class="img-responsive"
																	src="assets/img/products/pd_5.jpg" alt="">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-lg-8">
											<div class="row product-overview">
												<div class="col-12">
													<h5 class="product-title">Pure Leather Purse for Woman</h5>
													<p class="product-rate">
														<i class="mdi mdi-star is-rated"></i>
														<i class="mdi mdi-star is-rated"></i>
														<i class="mdi mdi-star is-rated"></i>
														<i class="mdi mdi-star is-rated"></i>
														<i class="mdi mdi-star"></i>
													</p>
													<p class="product-desc">Lorem Ipsum is simply dummy text of the
														printing and typesetting industry. Lorem Ipsum has been the
														industry's standard dummy text ever since the 1990.</p>
													
													
													<p class="product-price">Price: $120</p>
													<p class="product-sku">Stock: WH12</p>
													<ul class="product-size">
														<li class="size"><span>S</span></li>
														<li class="size"><span>M</span></li>
														<li class="size"><span>L</span></li>
														<li class="size"><span>XL</span></li>
													</ul>
													<ul class="product-color">
														<li class="color"><span
																style="background-color:#90cdf7;"></span></li>
														
													</ul>

													<div class="product-stock">
														<div class="stock">
															<p class="title">Available</p>
															<p class="text">180</p>
														</div>
														<div class="stock">
															<p class="title">Pending</p>
															<p class="text">50</p>
														</div>
														<div class="stock">
															<p class="title">InOrder</p>
															<p class="text">20</p>
														</div>
													</div>
												</div>
											</div>
											<ul class="nav nav-tabs" id="myRatingTab" role="tablist" style="margin-top:10px; justify-content:start;">
												<li class="nav-item">
													<a class="nav-link active"
														id="product-detail-tab" data-bs-toggle="tab"
														data-bs-target="#productdetail" href="#productdetail" role="tab"
														aria-selected="true">
														<i class="mdi mdi-library-books mr-1"></i> Detail</a>
												</li>

												<li class="nav-item">
													<a class="nav-link"
														id="product-information-tab" data-bs-toggle="tab"
														data-bs-target="#productinformation" href="#productinformation"
														role="tab" aria-selected="false">
														<i class="mdi mdi-information mr-1"></i>Info</a>
												</li>

												
											</ul>
											<div class="tab-content" id="myTabContent2">
												<div class="tab-pane pt-3 fade show active" id="productdetail"
													role="tabpanel">
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting
														industry.
														Lorem Ipsum has been the industry's standard dummy text ever
														since the
														1500s, when an unknown printer took a galley of type and
														scrambled it to
														make a type specimen book. It has survived not only five
														centuries, but also
														the leap into electronic typesetting, remaining essentially
														unchanged.
													</p>
													<ul class="features">
														<li>Any Product types that You want - Simple, Configurable</li>
														<li>Downloadable/Digital Products, Virtual Products</li>
														<li>Inventory Management with Backordered items</li>
														<li>Flatlock seams throughout.</li>
													</ul>
												</div>

												<div class="tab-pane pt-3 fade" id="productinformation" role="tabpanel">
													<ul>
														<li><span>Weight</span> 1000 g</li>
														<li><span>Dimensions</span> 35 × 30 × 7 cm</li>
														<li><span>Color</span> Black, Pink, Red, White</li>
													</ul>
												</div>

											
										</div>
									</div>
								</div>

									<div class="row review-rating mt-4">
										<div class="col-12">
											
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- End Content -->
			</div> <!-- End Content Wrapper -->
		</div> <!-- End Page Wrapper -->
	</div> <!-- End Wrapper -->
	<?php require("components/footer.php") ?>
	<!-- Common Javascript -->
	<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>
	<script src="assets/plugins/swiper/swiper-bundle.min.js"></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- human Custom -->
	<script src="assets/js/human.js"></script>
</body>


<!-- Mirrored from maraviyainfotech.com/projects/human/human-v37/human-admin/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jan 2024 06:16:04 GMT -->
</html>