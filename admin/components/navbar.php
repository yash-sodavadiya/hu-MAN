<!--  WRAPPER  -->
<div class="wrapper">
		
		<!-- LEFT MAIN SIDEBAR -->
		<div class="ec-left-sidebar ec-bg-sidebar">
			<div id="sidebar" class="sidebar ec-sidebar-footer">

				<div class="ec-brand">
					<a href="index.php" title="Ekka">
						<img class="ec-brand-icon" src="assets/img/logo.png" alt="" />
						<span class="ec-brand-name text-truncate">hu-MAN</span>
					</a>
				</div>

				<!-- begin sidebar scrollbar -->
				<div class="ec-navigation" data-simplebar>
					<!-- sidebar menu -->
					<ul class="nav sidebar-inner" id="sidebar-menu">
						<!-- Dashboard -->
						<li class="active">
							<a class="sidenav-item-link" href="index.php">
								<i class="fa-solid fa-border-all"></i>
								<span class="nav-text">Dashboard</span>
							</a>
							
						</li>

						
						<!-- Category -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
							<i class="fa-solid fa-layer-group"></i>
								<span class="nav-text">Categories</span> <i class="fa-solid fa-angle-right"></i>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="main-category.php">
											<span class="nav-text">Main Category</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="sub-category.php">
											<span class="nav-text">Sub Category</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- Products -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
							<!-- <i class="fa-solid fa-truck-fast"></i> -->
							<i class="fas fa-tshirt"></i>
								<span class="nav-text">Products</span> <i class="fa-solid fa-angle-right"></i>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="products" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="product-add.php">
											<span class="nav-text">Add Product</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="product-list.php">
											<span class="nav-text">List Product</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>

						<!-- Orders -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
							<i class="fa-solid fa-cart-shopping"></i>
								<span class="nav-text">Orders</span> <i class="fa-solid fa-angle-right"></i>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="new-order.php">
											<span class="nav-text">New Order</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="order-history.php">
											<span class="nav-text">Order History</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="order-detail.php">
											<span class="nav-text">Order Detail</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="invoice.php">
											<span class="nav-text">Invoice</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- employee -->
						<li >
							<a class="sidenav-item-link" href="employee-list.php">
								<i class="fa-solid fa-user"></i>
								<span class="nav-text">Employee</span>
							</a>
							
						</li>

						<!-- Users -->
						<li >
							<a class="sidenav-item-link" href="user-list.php">
								<i class="fa-solid fa-user"></i>
								<span class="nav-text">User</span>
							</a>
							
						</li>

						
						<!-- Authentication -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
							<i class="fa-solid fa-right-to-bracket"></i>
								<span class="nav-text">Authentication</span> <i class="fa-solid fa-angle-right"></i>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="authentication" data-parent="#sidebar-menu">
									<li class="">
										<a href="sign-in.php">
											<span class="nav-text">Sign In</span>
										</a>
									</li>
									<li class="">
										<a href="sign-up.php">
											<span class="nav-text">Sign Up</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						
					</ul>
				</div>
			</div>
		</div>

		<!--  PAGE WRAPPER -->
		<div class="ec-page-wrapper">

			<!-- Header -->
			<header class="ec-main-header" id="header">
				<nav class="navbar navbar-static-top navbar-expand-lg">
					<!-- Sidebar toggle button -->
					<button id="sidebar-toggler" class="sidebar-toggle">
					<i class="fa-solid fa-toggle-on"></i>
					</button>
					<!-- search form -->
					<div class="search-form d-lg-inline-block">
						<div class="input-group">
							<input type="text" name="query" id="search-input" class="form-control"
								placeholder="search.." autofocus autocomplete="off" />
							<button type="button" name="search" id="search-btn" class="btn btn-flat">
								<i class="mdi mdi-magnify"></i>
							</button>
						</div>
						<div id="search-results-container">
							<ul id="search-results"></ul>
						</div>
					</div>

					<!-- navbar right -->
					<div class="navbar-right">
						<ul class="nav navbar-nav">
							<!-- User Account -->
							<li class="dropdown user-menu">
								<button class="dropdown-toggle nav-link ec-drop" data-bs-toggle="dropdown"
									aria-expanded="false">
									<img src="assets/img/user/user.png" class="user-image" alt="User Image" />
								</button>
								<ul class="dropdown-menu dropdown-menu-right ec-dropdown-menu">
									<!-- User image -->
									<li class="dropdown-header">
										<img src="assets/img/user/user.png" class="img-circle" alt="User Image" />
										<div class="d-inline-block">
											John Deo <small class="pt-1">john.example@gmail.com</small>
										</div>
									</li>
									<li>
										<a href="user-profile.php">
											<i class="mdi mdi-account"></i> My Profile
										</a>
									</li>
									
									<li class="dropdown-footer">
										<a href="index.php"> <i class="mdi mdi-logout"></i> Log Out </a>
									</li>
								</ul>
							</li>
							
						</ul>
					</div>
				</nav>
			</header>
