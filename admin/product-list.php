<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="human - Admin Dashboard HTML Template.">

	<title>hu-MAN | Product List</title>

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

	<!-- No Extra plugin used -->

	<link href='assets/plugins/data-tables/datatables.bootstrap5.min.css' rel='stylesheet'>
	<link href='assets/plugins/data-tables/responsive.datatables.min.css' rel='stylesheet'>

	<!-- human CSS -->
	<link id="human-css" rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>" />

	<!-- FAVICON -->
	<link href="assets/img/logo/logo1.png" rel="shortcut icon" />
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
						<span><i class="mdi mdi-chevron-right"></i></span>Product
					</p>
				</div>
				<div>
					<a href="product-add" class="btn btn-primary"> Add Porduct</a>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card card-default">
						<div class="card-body">
							<div class="table-responsive">
								<table id="responsive-data-table" class="table" style="width:100%">
									<thead>
										<tr>
											<th>Product</th>
											<th>Name</th>
											<th>Size</th>
											<th>MRP</th>
											<th>Final Price</th>
											<th>Stock</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>

									<tbody>
										<?php
										$sql = "SELECT * FROM `product_tbl`";
										$result = mysqli_query($conn, $sql);
										foreach ($result as $row) {
											$tbl = $row['catagory_name'];
											$pid = $row['product_id'];
											$sql1 = "SELECT * FROM `$tbl` WHERE `p_id` = '$pid' ";
											$result1 = mysqli_query($conn, $sql1);
											foreach ($result1 as $row1) { ?>
												<tr>
													<td><img class="tbl-thumb"
															src="assets/img/product/<?php echo $row1['p_image'] ?>"
															alt="Product Image" /></td>
													<td>
														<?php echo $row1['p_name'] ?>
													</td>
													<td>
													<?php
													$p_id = $row1['p_id'] ;
    $sql = "SELECT * FROM `size_tbl` WHERE `p_id` = $p_id";
    $result = mysqli_query($conn, $sql);

    $sizes = array(); // Initialize an array to store sizes

    // Fetch sizes from the result set
    while ($row = mysqli_fetch_assoc($result)) {
        $sizes[] = $row['p_size']; // Add each size to the sizes array
    }

    // Check if there are any sizes
    if (!empty($sizes)) {
        // Get the last size
        $last_size = end($sizes);
        
        // Remove the last size from the array
        array_pop($sizes);
        
        // Output the sizes separated by a comma, except for the last one
        foreach ($sizes as $size) {
            echo $size . ', ';
        }
        
        // Output the last size without a comma
        echo $last_size;
    }
?>


													</td>
													<td>
														<?php echo $row1['p_mrp'] ?>
													</td>
													<td>
														<?php echo $row1['p_final_price'] ?>
													</td>
													<td>
														<?php echo $row1['p_stock'] ?>
													</td>
													<td>ACTIVE</td>
													<td>
														<div class="action-icon">

															<!-- edit button  -->
															<form action="product-edit" method="post">
																<?php
																$pid = $row1['p_id'];

																?>
																<input type="hidden" value="<?php echo $row1['p_id'] ?>"
																	name="pid">
																<input type="hidden" value="<?php echo $tbl ?>" name="tbl">
																<a href=""> <button type="submit" id="edit" name="submit"
																		value="edit" onClick=”window.location.reload(true)”> <i
																			class="fa-solid fa-pen"></i> </button></i> </a>

															</form>

															<!-- edit button end  -->

															<!-- delete button  -->

															<form action="php/product_delete.php" method="post">
																<?php
																$pid = $row1['p_id'];

																?>
																<input type="hidden" value="<?php echo $row1['p_id'] ?>"
																	name="pid">
																<input type="hidden" value="<?php echo $tbl ?>" name="tbl">


																<!-- <div class="delete"><i class="fa-solid fa-trash"></i></div> -->
																<a href=""> <button type="submit" id="delete" name="submit"
																		value="Delete" onClick=”window.location.reload(true)”><i
																			class="fa-solid fa-trash"></button></i> </a>

															</form>
															<!-- delete button end  -->
														</div>
													</td>
												</tr>
											<?php }
										}

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
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>

	<!-- Datatables -->
	<script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.responsive.min.js'></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- human Custom -->
	<script src="assets/js/human.js"></script>
</body>


<!-- Mirrored from maraviyainfotech.com/projects/human/human-v37/human-admin/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jan 2024 06:16:02 GMT -->

</html>