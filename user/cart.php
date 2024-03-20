 <?php session_start();?>
 <!DOCTYPE html>
 <html lang="en">
 <?php
 if(isset($_SESSION["user_id"]))
{ ?>
 
<head>
     <meta charset="UTF-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
 
     <title>hu-MAN | cart</title>
     <meta name="keywords"
         content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
     <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
     <meta name="author" content="ashishmaraviya">
 
     <!-- site Favicon -->
     <link rel="icon" href="assets/images/favicon/favicon.png" sizes="32x32" />
     <link rel="apple-touch-icon" href="assets/images/logo/logo1.png" />
    
 
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
     <link rel="stylesheet" href="assets/css/style.css" />
     <link rel="stylesheet" href="assets/css/responsive.css" />
 
     <!-- Background css -->
     <link rel="stylesheet" id="bg-switcher-css" href="assets/css/backgrounds/bg-4.css">
 </head>

<body class="cart_page">
    <!-- <div id="ec-overlay">
        <div class="ec-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> -->

    <?php require("components/navbar.php") ?>
    <!-- human Cart Start -->
    <div class="ec-side-cart-overlay"></div>
    <div id="ec-side-cart" class="ec-side-cart">
        <div class="ec-cart-inner">
            <div class="ec-cart-top">
                <div class="ec-cart-title">
                    <span class="cart_title">My Cart</span>
                    <button class="ec-close">×</button>
                </div>
                <ul class="eccart-pro-items">
                    <li>
                        <a href="product-left-sidebar.html" class="sidhuman_pro_img"><img
                                src="assets/images/product-image/6_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">T-shirt For Women</a>
                            <span class="cart-price"><span>$76.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidhuman_pro_img"><img
                                src="assets/images/product-image/12_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Women Leather Shoes</a>
                            <span class="cart-price"><span>$64.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidhuman_pro_img"><img
                                src="assets/images/product-image/3_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Girls Nylon Purse</a>
                            <span class="cart-price"><span>$59.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="ec-cart-bottom">
                <div class="cart-sub-total">
                    <table class="table cart-table">
                        <tbody>
                            <tr>
                                <td class="text-left">Sub-Total :</td>
                                <td class="text-right">$300.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">VAT (20%) :</td>
                                <td class="text-right">$60.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">Total :</td>
                                <td class="text-right primary-color">$360.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart_btn">
                    <a href="cart.html" class="btn btn-primary">View Cart</a>
                    <a href="checkout.html" class="btn btn-secondary">Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- human Cart End -->

    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Cart</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Cart</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Ec cart page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-cart-leftside col-lg-8 col-md-12 ">
                    <!-- cart content Start -->
                    <div class="ec-cart-content">
                        <div class="ec-cart-inner">
                            <div class="row">
                                <form action="#">
                                    <div class="table-content cart-table-content">
                                        <table id="cart-table">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Price</th>
                                                    <th style="text-align: center;">Quantity</th>
                                                    <th>Total</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $user_id = $_SESSION['user_id'];
                                                $sql = "SELECT * FROM `cart_tbl` WHERE `user_id` = '$user_id' ";
                                                $result = mysqli_query($conn,$sql);
                                                foreach($result as $row)
                                                {
                                                    $p_id = $row['p_id'];
                                                    $sql1 = "SELECT * FROM `product_tbl` WHERE `product_id` = $p_id";
                                                    $result1 = mysqli_query($conn,$sql1);
                                                    foreach($result1 as $row1)
                                                    {
                                                        $category = $row1['catagory_name'];
                                                        $sql2 = "SELECT * FROM `$category` WHERE `p_id` = $p_id";
                                                        $result2 = mysqli_query($conn,$sql2);
                                                        foreach($result2 as $row2)
                                                        { ?>

                                                            <tr>
                                                            <td data-label="Product" class="ec-cart-pro-name"><a
                                                                    href="product-left-sidebar.html"><img
                                                                        class="ec-cart-pro-img mr-4"
                                                                        src="../admin/assets/img/product/<?php echo $row2['p_image']?>" alt="" /><?php echo $row2['p_name']?>
                                                                    </a></td>
                                                            <td data-label="Price" class="ec-cart-pro-price"><span
                                                                    class="amount">₹<?php echo $row2['p_final_price']?>.00</span></td>
                                                                   <input type="hidden" name="product-id" class="product-id" value="<?php echo $row['p_id'] ?>">                                                    <!-- Inside the table row for each product -->
                                                                   <input type="hidden" name="user-id" class="user-id" value="<?php echo $row['user_id'] ?>">                                                    <!-- Inside the table row for each product -->
<td data-label="Quantity" class="ec-cart-pro-qty" style="text-align: center;">
    <div class="cart-qty-plus-minus">
        <button class="cart-plus">+</button>
        <input class="qty-input" type="text" name="cartqtybutton" value="<?php echo $row['quantity']?>" />
        <button class="cart-minus">-</button>
    </div>
</td>

                                                    <td data-label="Total" class="ec-cart-pro-subtotal">₹<?php echo $row['sub_total']; ?>.00</td>
                                                    <td data-label="Remove" class="ec-cart-pro-remove">
                                                        

                                                            <a href="php/delete_cart.php?c_id=<?php echo $row['cart_id'] ?>&u_id=<?php echo $row['user_id'] ?>"><i class="ecicon eci-trash-o"></i></a>
                                                        
                                                    </td>
                                                </tr>
                                                
                                                        <?php }
                                                    }
                                                }?>
 
                                               
                                                
                                                
                                     
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="ec-cart-update-bottom">
                                                <a href="#">Continue Shopping</a>
                                                <a href="checkout">Check Out</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--cart content End -->
                </div>
               
                
                        <!-- Sidebar Area Start -->
                <div class="ec-cart-rightside col-lg-4 col-md-12">
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Summary Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title">Summary</h3>
                            </div>
                            <div class="ec-sb-block-content">
                                <h4 class="ec-ship-title">Estimate Shipping</h4>
                                
                            </div>

                            <div class="ec-sb-block-content">
                                <div class="ec-cart-summary-bottom">
                                    <div class="ec-cart-summary">
                                        <div>
                                            <?php 
                                            $user_id = $_SESSION['user_id'];
                                            $sql = "SELECT * FROM `cart_total_tbl` WHERE u_id= '$user_id' ";
                                            $result = mysqli_query($conn,$sql);
                                            foreach($result as $row)
                                            {
                                            ?>
                                            <span class="text-left">Sub-Total</span>
                                            <span class="text-right" id="total_cost">₹<?php echo $row['sub_total'];?>.00</span>
                                            <?php }?>
                                        </div>
                                        <div>
                                            <span class="text-left"> + Delivery Charges</span>
                                            <span class="text-right">₹0.00</span>
                                        </div>
                                        <div>
                                            <span class="text-left"> - Discount</span>
                                            <span class="text-right">₹0.00</span>
                                        </div>
                                        <div>
                                            <span class="text-left">Coupan Discount</span>
                                            <span class="text-right"><a class="ec-cart-coupan">Apply Coupan</a></span>
                                        </div>
                                        
                                       
                                        <div class="ec-cart-coupan-content">
                                            <form class="ec-cart-coupan-form" name="ec-cart-coupan-form" method="post"
                                                action="#">
                                                <input class="ec-coupan" type="text" required=""
                                                    placeholder="Enter Your Coupan Code" name="ec-coupan" value="">
                                                <button class="ec-coupan-btn button btn-primary" type="submit"
                                                    name="subscribe" value="">Apply</button>
                                            </form>
                                        </div>
                                        <div class="ec-cart-summary-total">
                                        <?php 
                                            $user_id = $_SESSION['user_id'];
                                            $sql = "SELECT * FROM `cart_total_tbl` WHERE u_id= '$user_id' ";
                                            $result = mysqli_query($conn,$sql);
                                            foreach($result as $row)
                                            {
                                            ?>
                                            <span class="text-left">Total Amount</span>
                                            <span class="text-right" id="final_cost">₹<?php echo $row['sub_total'];?>.00</span>
                                            <?php }?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Summary Block -->
                    </div>
                </div>
            </div>
        </div>
    </section>


   

   <?php require("components/footer.php") ?>

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


<script>
$(document).ready(function(){
    $('.cart-plus').click(function(event) {
        event.preventDefault(); // Prevent the default behavior
        var input = $(this).closest('.cart-qty-plus-minus').find('.qty-input');
        var productId = $(this).closest('tr').find('.product-id').val();
        var userId = $(this).closest('tr').find('.user-id').val();
        var quantity = parseInt(input.val());
        input.val(quantity + 1);
        updateTotal(input)
        updateQuantity(productId, quantity + 1,input,userId);
    });
    $('.cart-minus').click(function(event) {
            event.preventDefault(); // Prevent the default behavior
            var input = $(this).closest('.cart-qty-plus-minus').find('.qty-input');
            var quantity = parseInt(input.val());
            var productId = $(this).closest('tr').find('.product-id').val();
            var userId = $(this).closest('tr').find('.user-id').val();
            if (quantity > 1) {
                input.val(quantity - 1);
                updateTotal(input);
                updateQuantity(productId,quantity -1,input,userId);
            }
        });

    
    function updateTotal(input) {
            var quantity = parseInt(input.val());
            var price = parseFloat(input.closest('tr').find('.ec-cart-pro-price .amount').text().replace('₹', ''));
        
            var total = price * quantity;
            input.closest('tr').find('.ec-cart-pro-subtotal').text('₹' + total.toFixed(2));

            // Update the total cost
            var totalCost = 0;
            $('.ec-cart-pro-subtotal').each(function() {
                totalCost += parseFloat($(this).text().replace('₹', ''));
            });
            $('#total_cost').text('₹' + totalCost.toFixed(2));
            $('#final_cost').text('₹' + totalCost.toFixed(2));
           
        }

        function updateQuantity(productId, newQuantity , input,userId) {
            var quantity = newQuantity;
            var price = parseFloat(input.closest('tr').find('.ec-cart-pro-price .amount').text().replace('₹', ''));
        
            var total = price * quantity;
            var totalCost = 0;
            $('.ec-cart-pro-subtotal').each(function() {
                totalCost += parseFloat($(this).text().replace('₹', ''));
            });

        $.ajax({
            url: 'php/update_cart.php',
            method: 'POST',
            data: {productId: productId, newQuantity: newQuantity ,newPrice:total,userId: userId , newTotalCost: totalCost},
            success: function(response){
                // Handle success if needed
                console.log(response); // Log response for debugging
                // You can update the UI here if required
            },
            error: function(xhr, status, error) {
                // Handle error if needed
                console.error(error);
            }
        });
    }

});



</script>



</body>


</html>
<?php } 
    else{
        header("location:signin.php");
    }
?>
