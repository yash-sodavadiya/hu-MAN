<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/human/human-v37/human-admin/product-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jan 2024 06:15:58 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="human - Admin Dashboard HTML Template.">

	<title>hu-MAN | Product-Add</title>

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

	<!-- WRAPPER -->
	<?php require("components/navbar.php") ?>
			<!-- CONTENT WRAPPER -->
			<div class="ec-content-wrapper">
				<div class="content">
					<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h1>Add Product</h1>
							<p class="breadcrumbs"><span><a href="index.html">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Product</p>
						</div>
						<div>
							<a href="product-list.html" class="btn btn-primary"> View All
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-header card-header-border-bottom">
									<h2>Add Product</h2>
								</div>

								<div class="card-body">
									<div class="row ec-vendor-uploads">
										<div class="col-lg-4">
											<div class="ec-vendor-img-upload">
												<div class="ec-vendor-main-img">
													<div class="avatar-upload">
														<div class="avatar-edit">
															<input type='file' id="imageUpload" class="ec-image-upload"
																accept=".png, .jpg, .jpeg" />
															<label for="imageUpload"><img
																	src="assets/img/icons/edit.svg"
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
																	class="ec-image-upload"
																	accept=".png, .jpg, .jpeg" />
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
																	class="ec-image-upload"
																	accept=".png, .jpg, .jpeg" />
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
																	class="ec-image-upload"
																	accept=".png, .jpg, .jpeg" />
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
																	class="ec-image-upload"
																	accept=".png, .jpg, .jpeg" />
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
																<input type='file' id="thumbUpload05"
																	class="ec-image-upload"
																	accept=".png, .jpg, .jpeg" />
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
																<input type='file' id="thumbUpload06"
																	class="ec-image-upload"
																	accept=".png, .jpg, .jpeg" />
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
												<form class="row g-3">
													<div class="col-md-6">
														<label for="inputEmail4" class="form-label">Product name</label>
														<input type="text" class="form-control slug-title" id="inputEmail4">
													</div>
													<div class="col-md-6">
														<label class="form-label">Select Categories</label>
														<select name="categories" id="Categories" class="form-select">
															<optgroup label="Fashion">
																<option value="t-shirt">T-shirt</option>
																<option value="dress">Dress</option>
															</optgroup>
															<optgroup label="Furniture">
																<option value="table">Table</option>
																<option value="sofa">Sofa</option>
															</optgroup>
															<optgroup label="Electronic">
																<option value="phone">I Phone</option>
																<option value="laptop">Laptop</option>
															</optgroup>
														</select>
													</div>
													<div class="col-md-12">
														<label for="slug" class="col-12 col-form-label">Slug</label> 
														<div class="col-12">
															<input id="slug" name="slug" class="form-control here set-slug" type="text">
														</div>
													</div>
													<div class="col-md-12">
														<label class="form-label">Sort Description</label>
														<textarea class="form-control" rows="2"></textarea>
													</div>
													<div class="col-md-4 mb-25">
														<label class="form-label">Colors</label>
														<input type="color" class="form-control form-control-color"
															id="exampleColorInput1" value="#ff6191"
															title="Choose your color">
														<input type="color" class="form-control form-control-color"
															id="exampleColorInput2" value="#33317d"
															title="Choose your color">
														<input type="color" class="form-control form-control-color"
															id="exampleColorInput3" value="#56d4b7"
															title="Choose your color">
														<input type="color" class="form-control form-control-color"
															id="exampleColorInput4" value="#009688"
															title="Choose your color">
													</div>
													<div class="col-md-8 mb-25">
														<label class="form-label">Size</label>
														<div class="form-checkbox-box">
															<div class="form-check form-check-inline">
																<input type="checkbox" name="size1" value="size">
																<label>S</label>
															</div>
															<div class="form-check form-check-inline">
																<input type="checkbox" name="size1" value="size">
																<label>M</label>
															</div>
															<div class="form-check form-check-inline">
																<input type="checkbox" name="size1" value="size">
																<label>L</label>
															</div>
															<div class="form-check form-check-inline">
																<input type="checkbox" name="size1" value="size">
																<label>XL</label>
															</div>
															<div class="form-check form-check-inline">
																<input type="checkbox" name="size1" value="size">
																<label>XXL</label>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<label class="form-label">Price <span>( In USD
																)</span></label>
														<input type="number" class="form-control" id="price1">
													</div>
													<div class="col-md-6">
														<label class="form-label">Quantity</label>
														<input type="number" class="form-control" id="quantity1">
													</div>
													<div class="col-md-12">
														<label class="form-label">Ful Detail</label>
														<textarea class="form-control" rows="4"></textarea>
													</div>
													<div class="col-md-12">
														<label class="form-label">Product Tags <span>( Type and
																make comma to separate tags )</span></label>
														<input type="text" class="form-control" id="group_tag"
															name="group_tag" value="" placeholder=""
															data-role="tagsinput" />
													</div>
													<div class="col-md-12">
														<button type="submit" class="btn btn-primary">Submit</button>
													</div>
												</form>
											</div>
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
	<script src="assets/plugins/tags-input/bootstrap-tagsinput.js"></script>
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- human Custom -->
	<script src="assets/js/human.js"></script>
</body>


<!-- Mirrored from maraviyainfotech.com/projects/human/human-v37/human-admin/product-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jan 2024 06:15:58 GMT -->
</html>