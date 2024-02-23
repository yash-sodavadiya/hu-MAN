<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	

	<title>hu-MAN | Coupons </title>

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

	<!-- Data Tables -->
	<link href='assets/plugins/data-tables/datatables.bootstrap5.min.css' rel='stylesheet'>
	<link href='assets/plugins/data-tables/responsive.datatables.min.css' rel='stylesheet'>

	<!-- human CSS -->
	<link id="human-css" rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>" />

	<!-- FAVICON -->
	<link href="assets/img/logo.png" rel="shortcut icon" />
</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">

	<?php require("components/navbar.php") ?>

	<!-- CONTENT WRAPPER -->
	<div class="ec-content-wrapper">
		<div class="content">
			<div class="breadcrumb-wrapper breadcrumb-contacts">
				<div>
					<h1>Coupons</h1>
					<p class="breadcrumbs"><span><a href="index.html">Home</a></span>
						<span><i class="mdi mdi-chevron-right"></i></span>Coupons
					</p>
				</div>
				<div>
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_employee">
						Add Coupons
					</button>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="ec-vendor-list card card-default">
						<div class="card-body">
							<div class="table-responsive">
								<table id="responsive-data-table" class="table">
									<thead>
										<tr>
											<th>Id</th>
											<th>Image</th>
											<th>Name</th>
											<th>Code</th>
											<th>Ammount</th>
											<th>Minimum Ammount</th>
											<th>Status</th>
											<th>Date</th>
                                
                                            <th>Action</th>
										</tr>
									</thead>

									<tbody>
										<?php
										$sql = "SELECT * FROM coupon_tbl ";
										$result = mysqli_query($conn, $sql);
										foreach ($result as $row) { ?>
											<tr>
											<td>
													<?php echo $row['c_id'] ?>
												</td>
												<td><img class="vendor-thumb"
														src="./assets/img/user/<?php echo $row['c_image'] ?>"
														alt="vendor image" /></td>
												<td>
													<?php echo $row['c_name'] ?>
												</td>
												<td>
													<?php echo $row['c_code'] ?>
												</td>
												<td>
													<?php echo $row['c_amount'] ?>
												</td>
												<td>
													<?php echo $row['mini_amount'] ?>
												</td>
												<?php if($row['c_status'] == "ACTIVE")
												{ ?>
												<td><span class="mb-2 mr-2 badge badge-success"><?php echo $row['c_status'] ?></span>
													</td>
												<?php }else{?>
													<td><span class="mb-2 mr-2 badge badge-danger"><?php echo $row['c_status'] ?></span></td>
												<?php }?>
												<td>
													<?php echo $row['c_date'] ?>
												</td>
												<td>
													<div class="action-icon">
													       <div class="edit">
															<button type="button"
																class="fa-solid fa-pen"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
															
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																
																<a class="dropdown-item" href="#">Cancel</a>
												            </div>
															</div>
														
														<form action="php/coupon_delete.php" method="post">
														<?php
														$eid = $row['c_id'];
														?>
														<input type="hidden" value="<?php echo $row['c_id'] ?>"
															name="cid">
														

															<!-- <div class="delete"><i class="fa-solid fa-trash"></i></div> -->
															<a href=""> <button type="submit" id="delete" name="submit"
																	value="Delete" onClick=”window.location.reload(true)”><i
																		class="fa-solid fa-trash"></button></i> </a>
														
													</form>													</div>
												</td>
											</tr>
										<?php } ?>
										

									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Add Vendor Modal  -->
			<div class="modal fade modal-add-contact" id="add_employee" tabindex="-1" role="dialog"
				aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
					<div class="modal-content">
						<form action="php/add_coupons.php" method="post" enctype="multipart/form-data">
							<div class="modal-header px-4">
								<h5 class="modal-title" id="exampleModalCenterTitle">Add New Coupon</h5>
							</div>

							<div class="modal-body px-4">
							<div class="form-group row mb-6">
									<label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">Coupon
										Image: </label>
										

									<div class="col-sm-8 col-lg-10">
										<div class="custom-file mb-1">
											<input type="file" class="custom-file-input" id="coverImage" name="c_img" required>
											<label class="custom-file-label" for="coverImage">Choose file...</label>
											<div class="invalid-feedback">Example invalid custom file feedback</div>
										</div>
									</div>
								</div>


								<div class="row mb-2">
									<div class="col-lg-6">
										<div class="form-group">
											<label for="c_name">Coupon name: </label>
											<input type="text" class="form-control" name="c_name" id="c_name" placeholder="Enter Name:">
										</div>
									</div>

									<div class="col-lg-6">
										<div class="form-group">
											<label for="code">Code: </label>
											<input type="text" class="form-control" id="code" name="code" placeholder="Enter code:">
										</div>
									</div>

									<div class="col-lg-6">
										<div class="form-group mb-4">
											<label for="amount">Amount.: </label>
											<input type="text" class="form-control" id="amount" name="amount" placeholder="Enter  Amount:">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group mb-4">
											<label for="amount">Minimum Amount: </label>
											<input type="text" class="form-control" id="mini_amount" name="mini_amount" placeholder="Enter  Amount:">
										</div>
									</div>

									
									<div class="col-lg-6">
										<div class="form-group mb-4">
											<label for="start_date">Start Date</label>
											<input type="text"  class="form-control" disabled style="background-color:#fff;" id="start_date" name="start_date" value="<?php $currentDate = date("Y-m-d"); echo $currentDate;?>">
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

	<!-- Data Tables -->
	<script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.responsive.min.js'></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- human Custom -->
	<script src="assets/js/human.js"></script>
</body>

<!-- Mirrored from maraviyainfotech.com/projects/human/human-v37/human-admin/vendor-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jan 2024 06:15:52 GMT -->

</html>