<?php session_start()?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="human - Admin Dashboard HTML Template.">

<title>hu-MAN | Product-Add</title>

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

<!-- human CSS -->
<link id="human-css" rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>" />

<!-- FAVICON -->
<link href="assets/img/favicon.png" rel="shortcut icon" />

</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">

	<!-- WRAPPER -->
	<?php require("components/navbar.php") ?>
	<?php
if(isset($_SESSION['success_message'])) {
	$success_message = $_SESSION['success_message'];
	
	if($success_message == "") {?>
			<div class="callout callout-success">
			
			<p><?php echo $success_message; ?></p>
			</div>
			<?php }
			else{?>
			
			<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>

<div class="alert alert-success alert-dismissible fade show" role="alert">
<svg class="bi flex-shrink-0 me-2" style="margin-right:10px;" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>

  <?php echo $success_message; ?>
 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
			<?php }
}?> 

	
	<!-- CONTENT WRAPPER -->
	<div class="ec-content-wrapper">
		<div class="content">
			<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
				<div>
					<h1>Add Product</h1>
					<p class="breadcrumbs"><span><a href="index.html">Home</a></span>
						<span><i class="mdi mdi-chevron-right"></i></span>Product
					</p>
				</div>
				<div>
					<a href="product-list" class="btn btn-primary"> View All
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card card-default">
						<div class="card-header card-header-border-bottom">
							<h2>Add Product</h2>
						</div>
						<form action="php/add_product.php" method="post" enctype="multipart/form-data">
							<div class="card-body">

								<div class="row ec-vendor-uploads">
									<div class="col-lg-4">
										<div class="ec-vendor-img-upload">
											<div class="ec-vendor-main-img">
												<div class="avatar-upload">
													<div class="avatar-edit">
														<input type='file' id="imageUpload" class="ec-image-upload"
															accept=".png, .jpg, .jpeg" name="p_image" />
														<label for="imageUpload"><img src="assets/img/icons/edit.svg"
																class="svg_img header_svg" alt="edit" /></label>
													</div>
													<div class="avatar-preview ec-preview">
														<div class="imagePreview ec-div-preview">
															<img class="ec-image-preview"
																src="assets/img/products/vender-upload-preview.jpg"
																alt="edit" />
														</div>
													</div>
												</div>
												<div class="thumb-upload-set colo-md-12">
													<div class="thumb-upload">
														<div class="thumb-edit">
															<input type='file' id="thumbUpload01"
																class="ec-image-upload" accept=".png, .jpg, .jpeg" name="t_image1"/>
															<label for="imageUpload"><img
																	src="assets/img/icons/edit.svg"
																	class="svg_img header_svg" alt="edit" /></label>
														</div>
														<div class="thumb-preview ec-preview">
															<div class="image-thumb-preview">
																<img class="image-thumb-preview ec-image-preview"
																	src="assets/img/products/vender-upload-thumb-preview.jpg"
																	alt="edit" />
															</div>
														</div>
													</div>
													<div class="thumb-upload">
														<div class="thumb-edit">
															<input type='file' id="thumbUpload02"
																class="ec-image-upload" accept=".png, .jpg, .jpeg" name="t_image2"/>
															<label for="imageUpload"><img
																	src="assets/img/icons/edit.svg"
																	class="svg_img header_svg" alt="edit" /></label>
														</div>
														<div class="thumb-preview ec-preview">
															<div class="image-thumb-preview">
																<img class="image-thumb-preview ec-image-preview"
																	src="assets/img/products/vender-upload-thumb-preview.jpg"
																	alt="edit" />
															</div>
														</div>
													</div>
													<div class="thumb-upload">
														<div class="thumb-edit">
															<input type='file' id="thumbUpload03"
																class="ec-image-upload" accept=".png, .jpg, .jpeg" name="t_image3"/>
															<label for="imageUpload"><img
																	src="assets/img/icons/edit.svg"
																	class="svg_img header_svg" alt="edit" /></label>
														</div>
														<div class="thumb-preview ec-preview">
															<div class="image-thumb-preview">
																<img class="image-thumb-preview ec-image-preview"
																	src="assets/img/products/vender-upload-thumb-preview.jpg"
																	alt="edit" />
															</div>
														</div>
													</div>
													<div class="thumb-upload">
														<div class="thumb-edit">
															<input type='file' id="thumbUpload04"
																class="ec-image-upload" accept=".png, .jpg, .jpeg" name="t_image4" />
															<label for="imageUpload"><img
																	src="assets/img/icons/edit.svg"
																	class="svg_img header_svg" alt="edit" /></label>
														</div>
														<div class="thumb-preview ec-preview">
															<div class="image-thumb-preview">
																<img class="image-thumb-preview ec-image-preview"
																	src="assets/img/products/vender-upload-thumb-preview.jpg"
																	alt="edit" />
															</div>
														</div>
													</div>

												</div>

											</div>
										</div>
									</div>
									<div class="col-lg-8">
										<div class="ec-vendor-upload-detail">
											<div class="row g-3 form">
												<div class="row">
													<div class="col-md-6">
														<label for="inputEmail4" class="form-label">Product name</label>
														<input type="text" class="form-control slug-title"
															id="inputEmail4" name="p_name">
													</div>
													<div class="col-md-6">
														<label class="form-label">Select Categories</label>
														<select name="categories" id="Categories" class="form-select">
															<optgroup label="Clothes">
																<option value="shirt">shirt</option>
																<option value="pent">pent</option>
															</optgroup>
															<optgroup label="Shoes">
																<option value="shoes">Shoes</option>
															</optgroup>
															<optgroup label="Perfume">
																<option value="perfume">Perfume</option>
															</optgroup>

														</select>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<label class="form-label">Price <span>( In INR
																)</span></label>
														<input type="number" class="form-control" id="mrp" name="p_mrp">
													</div>
													<div class="col-md-6">
														<label class="form-label">Final Price</label>
														<input type="number" class="form-control" id="final_price"
															name="p_final_price">
													</div>
												</div>

												<div class="col-md-12">
													<label class="form-label">Stock </label>
													<input type="number" class="form-control" id="stock" name="p_stock">
												</div>

												<!-- shirt details start  -->
												<div id="shirt_output">
													<div class="row">

														<div class="col-md-4 mb-25">

															<label class="form-label">Colors</label>
															<select name="p_color_1" id="p_color_1" class="form-select">
																<option value="">Select a color</option>
																<option value="red">Red</option>
																<option value="blue">Blue</option>
																<option value="green">Green</option>
																<option value="yellow">Yellow</option>
																<option value="orange">Orange</option>
																<option value="purple">Purple</option>
																<option value="pink">Pink</option>
																<option value="brown">Brown</option>
																<option value="black">Black</option>
																<option value="white">White</option>
															</select>
														</div>
														<div class="col-md-8 mb-25">
															<label class="form-label">Size</label>
															<div class="form-checkbox-box">
																<div class="form-check form-check-inline">
																	<input type="checkbox" name="P_size1[]" value="S">
																	<label>S</label>
																</div>
																<div class="form-check form-check-inline">
																	<input type="checkbox" name="P_size1[]" value="M">
																	<label>M</label>
																</div>
																<div class="form-check form-check-inline">
																	<input type="checkbox" name="P_size1[]" value="L">
																	<label>L</label>
																</div>
																<div class="form-check form-check-inline">
																	<input type="checkbox" name="P_size1[]" value="XL">
																	<label>XL</label>
																</div>
																<div class="form-check form-check-inline">
																	<input type="checkbox" name="P_size1[]" value="XXL">
																	<label>XXL</label>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<label class="form-label">Pattern</label>
															<input type="text" class="form-control" id="c_pattern"
																name="c_pattern">
														</div>
														<div class="col-md-6">
															<label class="form-label">Material type</label>
															<input type="text" class="form-control" id="s_material_type"
																name="s_material_type">
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<label class="form-label">Sleeve Type</label>
															<input type="text" class="form-control" id="c_sleeve_type"
																name="c_sleeve_type">
														</div>
														<div class="col-md-6">
															<label class="form-label">Length</label>
															<input type="text" class="form-control" id="c_length"
																name="c_length">
														</div>
													</div>



												</div>

												<!-- shirt details end  -->

												<!-- pent details start  -->
												<div id="pent_output" style="display:none;">
													<div class="row">
														<div class="col-md-4 mb-25">
														<label class="form-label">Colors</label>
															<select name="p_color_2" id="p_color_2" class="form-select">
																<option value="">Select a color</option>
																<option value="red">Red</option>
																<option value="blue">Blue</option>
																<option value="green">Green</option>
																<option value="yellow">Yellow</option>
																<option value="orange">Orange</option>
																<option value="purple">Purple</option>
																<option value="pink">Pink</option>
																<option value="brown">Brown</option>
																<option value="black">Black</option>
																<option value="white">White</option>
															</select>
														</div>
														<div class="col-md-8 mb-25">
															<label class="form-label">Size</label>
															<div class="form-checkbox-box">
																<div class="form-check form-check-inline">
																	<input type="checkbox" name="p_size1[]" value="28">
																	<label>28</label>
																</div>
																<div class="form-check form-check-inline">
																	<input type="checkbox" name="p_size1[]" value="30">
																	<label>30</label>
																</div>
																<div class="form-check form-check-inline">
																	<input type="checkbox" name="p_size1[]" value="32">
																	<label>32</label>
																</div>
																<div class="form-check form-check-inline">
																	<input type="checkbox" name="p_size1[]" value="34">
																	<label>34</label>
																</div>
																<div class="form-check form-check-inline">
																	<input type="checkbox" name="p_size1[]" value="36">
																	<label>36</label>
																</div>
																<div class="form-check form-check-inline">
																	<input type="checkbox" name="p_size1[]" value="38">
																	<label>38</label>
																</div>
																<div class="form-check form-check-inline">
																	<input type="checkbox" name="p_size1[]" value="40">
																	<label>40</label>
																</div>
															</div>
														</div>
													</div>
													<div class="row">

														<div class="col-md-6">
															<label class="form-label">Material type</label>
															<input type="text" class="form-control" id="p_material_type"
																name="p_material_type">
														</div>
														<div class="col-md-6">
															<label class="form-label">Length</label>
															<input type="text" class="form-control" id="p_pattern"
																name="p_length">
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<label class="form-label">Style</label>
															<input type="text" class="form-control" id="p_style"
																name="p_style">
														</div>
														<div class="col-md-6">
															<label class="form-label">Closure type</label>
															<input type="text" class="form-control" id="p_closure_type"
																name="p_closure_type">
														</div>
													</div>
												</div>
												<!-- pent discription end  -->

												<!-- shoes details start  -->
												<div id="shoes_output" style="display:none;">
													<div class="row">
													<div class="col-md-4 mb-25">
														<label class="form-label">Colors</label>
															<select name="p_color_3" id="p_color_3" class="form-select">
																<option value="">Select a color</option>
																<option value="red">Red</option>
																<option value="blue">Blue</option>
																<option value="green">Green</option>
																<option value="yellow">Yellow</option>
																<option value="orange">Orange</option>
																<option value="purple">Purple</option>
																<option value="pink">Pink</option>
																<option value="brown">Brown</option>
																<option value="black">Black</option>
																<option value="white">White</option>
															</select>
														</div>
														<div class="col-md-8 mb-25">
															<label class="form-label">Size</label>
															<div class="form-checkbox-box">
																<div class="form-check form-check-inline">
																	<input type="checkbox" name="p_size1[]" value="5">
																	<label>5</label>
																</div>
																<div class="form-check form-check-inline">
																	<input type="checkbox" name="p_size1[]" value="6">
																	<label>6</label>
																</div>
																<div class="form-check form-check-inline">
																	<input type="checkbox" name="p_size1[]" value="7">
																	<label>7</label>
																</div>
																<div class="form-check form-check-inline">
																	<input type="checkbox" name="p_size1[]" value="8">
																	<label>8</label>
																</div>
																<div class="form-check form-check-inline">
																	<input type="checkbox" name="p_size1[]" value="9">
																	<label>9</label>
																</div>
																<div class="form-check form-check-inline">
																	<input type="checkbox" name="p_size1[]" value="10">
																	<label>10</label>
																</div>
																<div class="form-check form-check-inline">
																	<input type="checkbox" name="p_size1[]" value="11">
																	<label>11</label>
																</div>
																<div class="form-check form-check-inline">
																	<input type="checkbox" name="p_size1[]" value="12">
																	<label>12</label>
																</div>
															</div>
														</div>
													</div>
													<div class="row">

														<div class="col-md-6">
															<label class="form-label">Material type</label>
															<input type="text" class="form-control" id="p_material_type"
																name="s_material_type">
														</div>
														<div class="col-md-6">
															<label class="form-label">Closure Type</label>
															<input type="text" class="form-control" id="p_pattern"
																name="s_closure_type">
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<label class="form-label">Heel Type</label>
															<input type="text" class="form-control" id="p_style"
																name="s_heel_type">
														</div>
														<div class="col-md-6">
															<label class="form-label">Water resistance level</label>
															<input type="text" class="form-control" id="p_closure_type"
																name="s_w_r_l">
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<label class="form-label">Sole material</label>
															<input type="text" class="form-control" id="p_style"
																name="s_sole_material">
														</div>
														<div class="col-md-6">
															<label class="form-label">Style</label>
															<input type="text" class="form-control" id="p_closure_type"
																name="s_style">
														</div>
													</div>

												</div>
												<!-- shoes discription end  -->


												<!-- perfume details start  -->
												<div id="perfume_output" style="display:none;">
													
													<div class="row">

														<div class="col-md-6">
															<label class="form-label">Brand</label>
															<input type="text" class="form-control" id="p_brand"
																name="p_brand">
														</div>
														<div class="col-md-6">
															<label class="form-label">Item Form</label>
															<input type="text" class="form-control" id="p_item_form"
																name="p_item_form">
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<label class="form-label">Item Volume</label>
															<input type="text" class="form-control" id="p_item_volume"
																name="p_item_volume">
														</div>
														<div class="col-md-6">
															<label class="form-label">Scent</label>
															<input type="text" class="form-control" id="p_scent"
																name="p_scent">
														</div>
													</div>
												</div>
												<!-- perfume discription end  -->

												<div class="col-md-12">
													<label class="form-label">Sort Description</label>
													<textarea class="form-control" rows="2"
														name="short_description"></textarea>
												</div>
												<div class="col-md-12">
													<label class="form-label">Full Detail</label>
													<textarea class="form-control" rows="4"
														name="long_description"></textarea>
												</div>
												<!-- pent details end  -->

												<div class="col-md-12">
													<button type="submit" class="btn btn-primary"
														name="add_product">Submit</button>
												</div>
											</div>
										</div>
									</div>
								</div>
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
	<script src="assets/plugins/tags-input/bootstrap-tagsinput.js"></script>
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- human Custom -->
	<script src="assets/js/human.js"></script>

	<!-- category drop down  -->
	<script>
		// Get reference to the dropdown
		const dropdown = document.getElementById('Categories');

		// Add event listener to detect changes
		dropdown.addEventListener('change', function () {
			// Get the selected value
			const selectedValue = dropdown.value;

			// Get reference to the output div
			// const output = document.getElementById('output');

			// Modify the output based on the selected value
			switch (selectedValue) {
				case 'shirt':
					$("#shirt_output").show();
					$("#pent_output").hide();
					$("#shoes_output").hide();
					$("#perfume_output").hide();
					break;
				case 'pent':
					$("#pent_output").show();
					$("#shirt_output").hide();
					$("#shoes_output").hide();
					$("#perfume_output").hide();
					break;
				case 'shoes':
					$("#shoes_output").show();
					$("#pent_output").hide();
					$("#shirt_output").hide();
					$("#perfume_output").hide();
					break;
				case 'perfume':
					$("#perfume_output").show();
					$("#pent_output").hide();
					$("#shirt_output").hide();
					$("#shoes_output").hide();
					break;
				default:
					output.textContent = 'Invalid option';
			}
		});
	</script>




</body>

</html>
<?php session_destroy(); ?>