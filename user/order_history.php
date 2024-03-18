<?php session_start()?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>hu-Man | Order History</title>
    <meta name="keywords"
        content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
    <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
    <meta name="author" content="ashishmaraviya">

    <!-- site Favicon -->
    <link rel="icon" href="assets/images/logo/logo1.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="assets/images/favicon/favicon.png" />
    <meta name="msapplication-TileImage" content="assets/images/favicon/favicon.png" />

    <!-- css Icon Font -->
    <link rel="stylesheet" href="assets/css/vendor/ecicons.min.css" />

    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="assets/css/plugins/animate.css" />
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/countdownTimer.css" />
    <link rel="stylesheet" href="assets/css/plugins/slick.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.css" />

    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/demo1.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link rel="stylesheet" href="assets/css/dark.css" />
	<link id="human-css" rel="stylesheet" href="../admin/assets/css/style.css?v=<?php echo time(); ?>" />

    <style>
		/* CSS */
.badge-pending {
    background-color:black;
}

.badge-ready-to-ship {
    background-color: darkorange;
}

.badge-delivered {
    background-color: green;
}
.table-header{
    background-color: #8585ff;
}
table{
    border: 1px solid;
    border-collapse: collapse;
}
tr,th,td{
    border: 1px solid;
}
	</style>
    <!-- Background css -->
    <link rel="stylesheet" id="bg-switcher-css" href="assets/css/backgrounds/bg-4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="">
    
    <div id="ec-overlay">
        <div class="ec-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <?Php require("components/navbar.php") ?>

    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Order History</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Order History</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<table id="responsive-data-table" class="table" style="width:100%">
											<thead class="table-header">
												<tr>
													<th>Order ID</th>
													<th>customer Name</th>
													<th>Items</th>
													<th>Price</th>
													<th>Payment</th>
													<th>Status</th>
													<th>Date</th>
													<th>Action</th>
												</tr>
											</thead>

											<tbody>
												
											<?php
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$user_id = $_SESSION['user_id'];
// SQL query to fetch data
$sql = "SELECT * FROM `order_tbl` WHERE `user_id` = '$user_id' ";
$result = $conn->query($sql);

// Array to store orders grouped by ID
$orders = array();

// Check if there are any rows returned
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $order_id = $row["order_id"];
        // If order_id exists in the array, update the quantity and total price
        if (array_key_exists($order_id, $orders)) {
            $orders[$order_id]["quantity"] += 1;
            $orders[$order_id]["total_price"] += $row["price"];
			
        } else {
            // Otherwise, add the order to the array
            $orders[$order_id] = array(
                "ID" => $order_id,
                "customer_name" => $row["customer_name"],
                "customer_email" => $row["customer_email"],
                "quantity" => 1, // Start counting quantity from 1
                "total_price" => $row["price"],
                "payment" => $row["payment"],
                "status" => $row["status"],
                "order_date" => $row["order_date"]
            );
        }
    }
    
    // Reverse the order of the array
    $orders = array_reverse($orders);
    
    // Output data of each order
    foreach ($orders as $order) {
        // Set the action button based on the status
        $actionButton = '';
        $cancelButton = '';
        if ($order["status"] == "Pending") {
            $actionButton = '<button type="submit" class="btn btn-primary btn-sm">Ready to Ship</button>';
            $cancelButton = '<button type="button" class="btn btn-danger btn-sm">Cancel</button>';
        } elseif ($order["status"] == "ready-to-ship") {
            $actionButton = '<button type="submit" class="btn btn-success btn-sm">Delivery</button>';
        } else {
            // Add condition for other statuses if needed
        }

        // Set status class for styling
        $statusClass = strtolower(str_replace(" ", "-", $order["status"]));

        echo '<tr>
                <td>' . $order["ID"] . '</td>
                <td><strong>' . $order["customer_name"] . '</strong><br>' . $order["customer_email"] . '</td>
                <td>' . $order["quantity"] . '</td>
                <td>₹' . $order["total_price"] . '</td>
                <td>' . $order["payment"] . '</td>
                <td><span class="mb-2 mr-2 badge badge-' . $statusClass . '">' . $order["status"] . '</span></td>
                <td>' . $order["order_date"] . '</td>
                <td style="display:flex; justify-content:space-around; border:none;">
                    <a><i class="fa-solid fa-eye"  style="color : #88aaf3;"></i></a>
                   
                </td>
            </tr>';
    }

} else {
    echo "0 results";
}
$conn->close();
?>







												
												
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
                


    <?Php require("components/footer.php") ?>

    <!-- Vendor JS -->
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    

    <!--Plugins JS-->
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/countdownTimer.min.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/infiniteslidev2.js"></script>
    <script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/jquery.sticky-sidebar.js"></script>

    <!-- Main Js -->
    <script src="assets/js/vendor/index.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>