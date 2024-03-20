<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/human/human-v37/human-admin/new-order.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jan 2024 06:16:04 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="human - Admin Dashboard HTML Template.">

	<title>hu-MAN | New-Order</title>

	<!-- GOOGLE FONTS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

	<link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

	<!-- PLUGINS CSS STYLE -->
	<link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

	<!-- Data-Tables -->
	<link href='assets/plugins/data-tables/datatables.bootstrap5.min.css' rel='stylesheet'>
	<link href='assets/plugins/data-tables/responsive.datatables.min.css' rel='stylesheet'>

	<!-- human CSS -->
	<link id="human-css" rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>" />

	<!-- FAVICON -->
	<link href="assets/img/favicon.png" rel="shortcut icon" />
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

	</style>
</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">

<?php require("components/navbar.php") ?>

			<!-- CONTENT WRAPPER -->
			<div class="ec-content-wrapper">
				<div class="content">
					<div class="breadcrumb-wrapper breadcrumb-wrapper-2">
						<h1>New Orders</h1>
						<p class="breadcrumbs"><span><a href="index.html">Home</a></span>
							<span><i class="mdi mdi-chevron-right"></i></span>Orders
						</p>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<table id="responsive-data-table" class="table" style="width:100%">
											<thead>
												<tr>
													<th>ID</th>
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

// SQL query to fetch data
$sql = "SELECT * FROM order_tbl WHERE `status` = 'Pending' ";
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
            $cancelButton = '<button type="submit" class="btn btn-danger btn-sm">Cancel</button>';
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
                <td style="display:flex; justify-content:space-between;">
                    <a><i class="fa-solid fa-eye"  style="color : #88aaf3;"></i></a>
                    <form action="php/update_status.php" method="post">
                        <input type="hidden" value="'.$order['ID'].'" name="order_id">
						<input type="hidden" value="'.$order['status'].'" name="order_status">
                        <div class="edit">' . $actionButton . '</div>
						
                    </form>
					<form action="php/cancle-order.php" method="post">
                        <input type="hidden" value="'.$order['ID'].'" name="order_id">
					<div class="cancel" >' . $cancelButton. '</div>
					</form>
				
				
			
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
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<!-- Data-Tables -->
	<script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.responsive.min.js'></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- human Custom -->
	<script src="assets/js/human.js"></script>
	
</body>


</html>