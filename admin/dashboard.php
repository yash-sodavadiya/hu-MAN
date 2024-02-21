<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/human/human-v37/human-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jan 2024 06:15:34 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="hu-Man">
	
	<title>hu-MAN | Dashboard</title>

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet"> 

	<link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

	<!-- PLUGINS CSS STYLE -->
	<link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

	<!-- human CSS -->
	<link id="human-css" href="assets/css/style.css?v=<?php echo time(); ?>" rel="stylesheet" />

	<!-- FAVICON -->
	<link href="assets/img/logo.png" rel="shortcut icon" />

</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-light ec-header-light" id="body">

		<?php require("components/navbar.php") ?>
			<!-- CONTENT WRAPPER -->
			<div class="ec-content-wrapper">
				<div class="content">
					<!-- Top Statistics -->
					<div class="row">
						<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
							<div class="card card-mini dash-card card-1">
								<div class="card-body">
									<h2 class="mb-1">1,000</h2>
									<p>Users</p>
									<span><i class="fa-solid fa-user" style="font-size:20px;"></i></span>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
							<div class="card card-mini dash-card card-2">
								<div class="card-body">
									<h2 class="mb-1">150+</h2>
									<p>Product</p>
									<span><i class="fa-solid fa-box" style="font-size:20px;"></i></span>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
							<div class="card card-mini dash-card card-3">
								<div class="card-body">
									<h2 class="mb-1">15,000</h2>
									<p> Order</p>
									<span><i class="fa-solid fa-cart-shopping" style="font-size:20px;"></i></span>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
							<div class="card card-mini dash-card card-4">
								<div class="card-body">
									<h2 class="mb-1">₹ 5M+</h2>
									<p>Revenue</p>
									<span ><i class="fa-solid fa-indian-rupee-sign" style="font-size:20px;"></i></span>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-8 col-md-12 p-b-15">
							<!-- Sales Graph -->
							<div id="user-acquisition" class="card card-default">
								<div class="card-header">
									<h2>Sales Report</h2>
								</div>
								<div class="card-body">
									<ul class="nav nav-tabs nav-style-border justify-content-between justify-content-lg-start border-bottom"
										role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-bs-toggle="tab" href="#todays" role="tab"
												aria-selected="true">Today's</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-bs-toggle="tab" href="#monthly" role="tab"
												aria-selected="false">Monthly </a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-bs-toggle="tab" href="#yearly" role="tab"
												aria-selected="false">Yearly</a>
										</li>
									</ul>
									<div class="tab-content pt-4" id="salesReport">
										<div class="tab-pane fade show active" id="source-medium" role="tabpanel">
											<div class="mb-6" style="max-height:247px">
												<canvas id="acquisition" class="chartjs2"></canvas>
												<div id="acqLegend" class="customLegend mb-2"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12 p-b-15">
							<!-- Doughnut Chart -->
							<div class="card card-default">
								<div class="card-header justify-content-center">
									<h2>Orders Overview</h2>
								</div>
								<div class="card-body">
									<canvas id="doChart"></canvas>
								</div>
								<a href="#" class="pb-5 d-block text-center text-muted"><i
										class="mdi mdi-download mr-2"></i> Download overall report</a>
								<div class="card-footer d-flex flex-wrap bg-white p-0">
									<div class="col-6">
										<div class="p-20">
											<ul class="d-flex flex-column justify-content-between">
												<li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
														style="color: #4c84ff"></i>Order Completed</li>
												<li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
														style="color: #80e1c1 "></i>Order Unpaid</li>
												<li><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
														style="color: #ff7b7b "></i>Order returned</li>
											</ul>
										</div>
									</div>
									<div class="col-6 border-left">
										<div class="p-20">
											<ul class="d-flex flex-column justify-content-between">
												<li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
														style="color: #8061ef"></i>Order Pending</li>
												<li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
														style="color: #ffa128"></i>Order Canceled</li>
												<li><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
														style="color: #7be6ff"></i>Order Broken</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-8 col-md-12 p-b-15">
							<!-- User activity statistics -->
							<div class="card card-default" id="user-activity">
								<div class="no-gutters">
									<div>
										<div class="card-header justify-content-between">
											<h2>User Activity</h2>
											<div class="date-range-report ">
												<span></span>
											</div>
										</div>
										<div class="card-body">
											<div class="tab-content" id="userActivityContent"> 
												<div class="tab-pane fade show active" id="user" role="tabpanel">
													<canvas id="activity" class="chartjs"></canvas>
												</div>
											</div>
										</div>
										<div class="card-footer d-flex flex-wrap bg-white border-top">
											<a href="#" class="text-uppercase py-3">In-Detail Overview</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-12 p-b-15">
							<div class="card card-default">
								<div class="card-header flex-column align-items-start">
									<h2>Current Users</h2>
								</div>
								<div class="card-body">
									<canvas id="currentUser" class="chartjs"></canvas>
								</div>
								<div class="card-footer d-flex flex-wrap bg-white border-top">
									<a href="#" class="text-uppercase py-3">In-Detail Overview</a>
								</div>
							</div>
						</div>
					</div>

					
					<div class="row">
						<div class="col-12 p-b-15">
							<!-- Recent Order Table -->
							<div class="card card-table-border-none card-default recent-orders" id="recent-orders">
								<div class="card-header justify-content-between">
									<h2>Recent Orders</h2>
									<div class="date-range-report">
										<span></span>
									</div>
								</div>
								<div class="card-body pt-0 pb-5">
									<table class="table card-table table-responsive table-responsive-large"
										style="width:100%">
										<thead>
											<tr>
												<th>Order ID</th>
												<th>Product Name</th>
												<th class="d-none d-lg-table-cell">Units</th>
												<th class="d-none d-lg-table-cell">Order Date</th>
												<th class="d-none d-lg-table-cell">Order Cost</th>
												<th>Status</th>
											
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>01</td>
												<td>
													<a class="text-dark" href="#">black suit</a>
												</td>
												<td class="d-none d-lg-table-cell">1</td>
												<td class="d-none d-lg-table-cell">01/01/2024</td>
												<td class="d-none d-lg-table-cell">₹ 3000</td>
												<td>
													<span class="badge badge-success">Completed</span>
												</td>
												
											</tr>
											<tr>
												<td>02</td>
												<td>
													<a class="text-dark" href="#"> Toddler Shoes,rado whatch</a>
												</td>
												<td class="d-none d-lg-table-cell">2 Units</td>
												<td class="d-none d-lg-table-cell">02/01/2024</td>
												<td class="d-none d-lg-table-cell">₹ 4550</td>
												<td>
													<span class="badge badge-primary">Delayed</span>
												</td>
												
											</tr>
											<tr>
												<td>03</td>
												<td>
													<a class="text-dark" href="#">blue Suit</a>
												</td>
												<td class="d-none d-lg-table-cell">1 Unit</td>
												<td class="d-none d-lg-table-cell">01/01/2024</td>
												<td class="d-none d-lg-table-cell">₹ 2500</td>
												<td>
													<span class="badge badge-warning">On Hold</span>
												</td>
											
											</tr>
											<tr>
												<td>04</td>
												<td>
													<a class="text-dark" href="#"> Backpack Gents</a>
												</td>
												<td class="d-none d-lg-table-cell">5 Units</td>
												<td class="d-none d-lg-table-cell">10/01/2024</td>
												<td class="d-none d-lg-table-cell">₹10,000</td>
												<td>
													<span class="badge badge-success">Completed</span>
												</td>
												
											</tr>
											<tr>
												<td>05</td>
												<td>
													<a class="text-dark" href="#"> watchs</a>
												</td>
												<td class="d-none d-lg-table-cell">1 Unit</td>
												<td class="d-none d-lg-table-cell">01/01/2024</td>
												<td class="d-none d-lg-table-cell">₹ 2000</td>
												<td>
													<span class="badge badge-danger">Cancelled</span>
												</td>
											
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-5">
							<!-- New Customers -->
							<div class="card ec-cust-card card-table-border-none card-default">
								<div class="card-header justify-content-between ">
									<h2>New Customers</h2>
								
								</div>
								<div class="card-body pt-0 pb-15px">
									<table class="table ">
										<tbody>
											<tr>
												<td>
													<div class="media">
														<div class="media-image mr-3 rounded-circle">
															<a href="profile.html"><img
																	class="profile-img rounded-circle w-45"
																	src="assets/img/user/u1.jpg"
																	alt="customer image"></a>
														</div>
														<div class="media-body align-self-center">
															<a href="profile.html">
																<h6 class="mt-0 text-dark font-weight-medium"> smit ranpariya</h6>
															</a>
															<small>smit@gmail.com</small>
														</div>
													</div>
												</td>
												<td>2 Orders</td>
												<td class="text-dark d-none d-md-block">₹1500</td>
											</tr>
											<tr>
												<td>
													<div class="media">
														<div class="media-image mr-3 rounded-circle">
															<a href="profile.html"><img
																	class="profile-img rounded-circle w-45"
																	src="assets/img/user/u2.jpg"
																	alt="customer image"></a>
														</div>
														<div class="media-body align-self-center">
															<a href="profile.html">
																<h6 class="mt-0 text-dark font-weight-medium">yash sodavdiya</h6>
															</a>
															<small>yash12@gmail.com</small>
														</div>
													</div>
												</td>
												<td>5 Orders</td>
												<td class="text-dark d-none d-md-block">₹4200</td>
											</tr>
											<tr>
												<td>
													<div class="media">
														<div class="media-image mr-3 rounded-circle">
															<a href="profile.html"><img
																	class="profile-img rounded-circle w-45"
																	src="assets/img/user/u3.jpg"
																	alt="customer image"></a>
														</div>
														<div class="media-body align-self-center">
															<a href="profile.html">
																<h6 class="mt-0 text-dark font-weight-medium">meet goti</h6>
															</a>
															<small>meet12433@gmail.com</small>
														</div>
													</div>
												</td>
												<td>2 Order</td>
												<td class="text-dark d-none d-md-block">₹550</td>
											</tr>
											<tr>
												<td>
													<div class="media">
														<div class="media-image mr-3 rounded-circle">
															<a href="profile.html"><img
																	class="profile-img rounded-circle w-45"
																	src="assets/img/user/u4.jpg"
																	alt="customer image"></a>
														</div>
														<div class="media-body align-self-center">
															<a href="profile.html">
																<h6 class="mt-0 text-dark font-weight-medium">zeel vaghani</h6>
															</a>
															<small>zeel32e@gmail.com</small>
														</div>
													</div>
												</td>
												<td>2 Orders</td>
												<td class="text-dark d-none d-md-block">₹1100</td>
											</tr>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>

						<div class="col-xl-7">
							<!-- Top Products -->
							<div class="card card-default ec-card-top-prod">
								<div class="card-header justify-content-between">
									<h2>Top Products</h2>
									
								</div>
								<div class="card-body mt-10px mb-10px py-0">
									<div class="row media d-flex pt-15px pb-15px">
										<div
											class="col-lg-3 col-md-3 col-2 media-image align-self-center rounded">
											<a href="#"><img src="assets/img/products/p1.jpg" alt="customer image"></a>
										</div>
										<div class="col-lg-9 col-md-9 col-10 media-body align-self-center ec-pos">
											<a href="#">
												<h6 class="mb-10px text-dark font-weight-medium"> shoes</h6>
											</a>
											<p class="float-md-right sale"><span class="mr-2">50</span>Sales</p>
											<p class="d-none d-md-block">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium voluptatem ipsa sed commodi similique distinctio sequi quae ex.

											</p>
											<p class="mb-0 ec-price">
												<span class="text-dark">₹1500</span>
												<del>₹1800</del>
											</p>
										</div>
									</div>
									<div class="row media d-flex pt-15px pb-15px">
										<div
											class="col-lg-3 col-md-3 col-2 media-image align-self-center rounded">
											<a href="#"><img src="assets/img/products/p2.jpg" alt="customer image"></a>
										</div>
										<div class="col-lg-9 col-md-9 col-10 media-body align-self-center ec-pos">
											<a href="#">
												<h6 class="mb-10px text-dark font-weight-medium">suit for men</h6>
											</a>
											<p class="float-md-right sale"><span class="mr-2">75</span>Sales</p>
											<p class="d-none d-md-block">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium voluptatem ipsa sed commodi similique distinctio sequi quae ex.</p>
											<p class="mb-0 ec-price">
												<span class="text-dark">₹2500</span>
												<del>₹3000</del>
											</p>
										</div>
									</div>
									<div class="row media d-flex pt-15px pb-15px">
										<div
											class="col-lg-3 col-md-3 col-2 media-image align-self-center rounded">
											<a href="#"><img src="assets/img/products/p3.jpg" alt="customer image"></a>
										</div>
										<div class="col-lg-9 col-md-9 col-10 media-body align-self-center ec-pos">
											<a href="#">
												<h6 class="mb-10px text-dark font-weight-medium">watch</h6>
											</a>
											<p class="float-md-right sale"><span class="mr-2">25</span>Sales</p>
											<p class="d-none d-md-block">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium voluptatem ipsa sed commodi similique distinctio sequi quae ex.</p>
											<p class="mb-0 ec-price">
												<span class="text-dark">₹4000</span>
												<del>₹5000</del>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- End Content -->
			</div> <!-- End Content Wrapper -->

			<?php require("components/footer.php") ?>

		</div> <!-- End Page Wrapper -->
	</div> <!-- End Wrapper -->

	<!-- Common Javascript -->
	<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>

	<!-- Chart -->
	<script src="assets/plugins/charts/Chart.min.js"></script>
	<script src="assets/js/chart.js"></script>
	<script src="assets/js/fontawsomekit.js"></script>

	<!-- Google map chart -->
	<script src="assets/plugins/charts/google-map-loader.js"></script>
	<script src="assets/plugins/charts/google-map.js"></script>

	<!-- Date Range Picker -->
	<script src="assets/plugins/daterangepicker/moment.min.js"></script>
    <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="assets/js/date-range.js"></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- human Custom -->
	<script src="assets/js/human.js"></script>
	<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

</body>


<!-- Mirrored from maraviyainfotech.com/projects/human/human-v37/human-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jan 2024 06:15:48 GMT -->
</html>