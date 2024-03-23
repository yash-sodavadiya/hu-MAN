<?php session_start()?>
 <!DOCTYPE html>
 <html lang="en">
 
 
<head>
     <meta charset="UTF-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
 
     <title>hu-Man | Shop</title>
     <meta name="keywords"
         content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
     <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
     <meta name="author" content="ashishmaraviya">

       <!-- chatboat  -->
       <link rel="stylesheet" href="assets/style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700,300">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.1.2/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Epilogue:wght@400&family=Finger+Paint&display=swap">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
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
     <link rel="stylesheet" href="assets/css/plugins/nouislider.css" />
 
     <!-- Main Style -->
     <link rel="stylesheet" href="assets/css/style.css" />
     <link rel="stylesheet" href="assets/css/responsive.css" />
 
     <!-- Background css -->
     <link rel="stylesheet" id="bg-switcher-css" href="assets/css/backgrounds/bg-4.css">
 </head>
<body class="shop_page">
    <!-- <div id="ec-overlay">
        <div class="ec-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> -->

    

    <?php require("components/navbar.php") ?>
   

    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Shop</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Shop</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Page detail section -->
    <section class="ec-bnr-detail margin-bottom-30 section-space-pt">
        <div class="ec-page-detail">
            <div class="container">
                <div class="ec-main-heading d-none">
                    <h2>Shop <span>Detail</span></h2>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End detail section -->

    <!-- Ec Shop page -->
    <section class="ec-page-content-bnr section-space-pb">
        <div class="container">
            <div class="row">
                <div class="ec-shop-rightside col-lg-9 order-lg-last col-md-12 order-md-first margin-b-30">
                    <!-- Shop Top Start -->
                    <div class="ec-pro-list-top d-flex">
                        <div class="col-md-6 ec-grid-list">
                            <div class="ec-gl-btn">
                                <button class="btn btn-grid active"><i class="fi-rr-apps"></i></button>
                                <button class="btn btn-list"><i class="fi-rr-list"></i></button>
                            </div>
                        </div>
                        <div class="col-md-6 ec-sort-select">
                            <span class="sort-by">Sort by</span>
                            <div class="ec-select-inner">
                                <select name="ec-select" id="ec-select">
                                    <option selected disabled>Position</option>
                                    <option value="1">Relevance</option>
                                    <option value="2">Name, A to Z</option>
                                    <option value="3">Name, Z to A</option>
                                    <option value="4">Price, low to high</option>
                                    <option value="5">Price, high to low</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Shop Top End -->

                    <!-- Shop content Start -->
                    <div class="shop-pro-content">
   
                        
                        <div class="shop-pro-inner">
        <div class="row" id="recordsContainer" style="opacity:1 !important">
        
        </div>
                        </div>
                        
                        
                      
                    
                    </div>
                    <!--Shop content End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="ec-shop-leftside col-lg-3 order-lg-first col-md-12 order-md-last">
                    <div id="shop_sidebar">
                        <div class="ec-sidebar-heading">
                            <h1>Filter Products By</h1>
                        </div>
                        <div class="ec-sidebar-wrap">
                            <!-- Sidebar Category Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Category</h3>
                                </div>
                                <div class="ec-sb-block-content">
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" value="shirt_tbl" class="category-checkbox"/> <a href="#">Shirt</a><span
                                                    class="checked"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" value="pent_tbl" class="category-checkbox"/> <a href="#">Pent</a><span
                                                    class="checked"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" value="shoes_tbl" class="category-checkbox"/> <a href="#">Shoes</a><span
                                                    class="checked"></span>
                                            </div>
                                        </li>
                                        
                                        

                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar Size Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Size</h3>
                                </div>
                                <div class="ec-sb-block-content">
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" value="S" class="size-checkbox" /><a href="#">S</a><span
                                                    class="checked"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" value="M" class="size-checkbox"/><a href="#">M</a><span
                                                    class="checked"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" value="L" class="size-checkbox"/> <a href="#">L</a><span
                                                    class="checked"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" value="XL" class="size-checkbox"/><a href="#">XL</a><span
                                                    class="checked"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" value="XXL" class="size-checkbox"/><a href="#">XXL</a><span
                                                    class="checked"></span>
                                            </div>
                                        </li>
                                        <li id="ec-more-toggle-content" style="padding: 0; display: none;">
                                            <ul style="display:none;">
                                                <li>
                                                    <div class="ec-sidebar-block-item">
                                                        <input type="checkbox" value="5" class="size-checkbox"/> <a href="#">5</a><span
                                                            class="checked"></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="ec-sidebar-block-item">
                                                        <input type="checkbox" value="6" class="size-checkbox"/> <a href="#">6</a><span
                                                            class="checked"></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="ec-sidebar-block-item">
                                                        <input type="checkbox" value="7" class="size-checkbox"/> <a href="#">7</a><span
                                                            class="checked"></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="ec-sidebar-block-item">
                                                        <input type="checkbox" value="8" class="size-checkbox"/> <a href="#">8</a><span
                                                            class="checked"></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="ec-sidebar-block-item">
                                                        <input type="checkbox" value="9" class="size-checkbox"/> <a href="#">9</a><span
                                                            class="checked"></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="ec-sidebar-block-item">
                                                        <input type="checkbox" value="10" class="size-checkbox"/> <a href="#">10</a><span
                                                            class="checked"></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="ec-sidebar-block-item">
                                                        <input type="checkbox" value="11" class="size-checkbox"/> <a href="#">11</a><span
                                                            class="checked"></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="ec-sidebar-block-item">
                                                        <input type="checkbox" value="12" class="size-checkbox"/> <a href="#">12</a><span
                                                            class="checked"></span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item ec-more-toggle">
                                                <span class="checked"></span><span id="ec-more-toggle">Shoes Size</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                
                                    
                            </div>
                            <!-- Sidebar Color item -->
                            <div class="ec-sidebar-block ec-sidebar-block-clr">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Color</h3>
                                </div>
                                <div class="ec-sb-block-content">
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-block-item"><span
                                                    style="background-color:#c4d6f9;"></span></div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item"><span
                                                    style="background-color:#ff748b;"></span></div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item"><span
                                                    style="background-color:#000000;"></span></div>
                                        </li>
                                        <li class="active">
                                            <div class="ec-sidebar-block-item"><span
                                                    style="background-color:#2bff4a;"></span></div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item"><span
                                                    style="background-color:#ff7c5e;"></span></div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item"><span
                                                    style="background-color:#f155ff;"></span></div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item"><span
                                                    style="background-color:#ffef00;"></span></div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item"><span
                                                    style="background-color:#c89fff;"></span></div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item"><span
                                                    style="background-color:#7bfffa;"></span></div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item"><span
                                                    style="background-color:#56ffc1;"></span></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar Price Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Price</h3>
                                </div>
                                <div class="ec-sb-block-content es-price-slider">
                                    <div class="ec-price-filter">
                                        <div id="ec-sliderPrice" class="filter__slider-price" data-min="0"
                                            data-max="250" data-step="10"></div>
                                        <div class="ec-price-input">
                                            <label class="filter__label"><input type="text"
                                                    class="filter__input"></label>
                                            <span class="ec-price-divider"></span>
                                            <label class="filter__label"><input type="text"
                                                    class="filter__input"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Shop page -->

   
    <?php require("components/footer.php") ?>

    <div id="popupModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>

            <div class="modal-body" id="popupContent">

            </div>
        </div>
    </div>
    </div>
</div>

<!-- chat bot  -->

<?php require("components/chat-bot.php") ?>

    <!-- Footer navigation panel for responsive display -->
    <div class="ec-nav-toolbar">
        <div class="container">
            <div class="ec-nav-panel">
                <div class="ec-nav-panel-icons">
                    <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><i
                            class="fi-rr-menu-burger"></i></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><i
                            class="fi-rr-shopping-bag"></i><span
                            class="ec-cart-noti ec-header-count cart-count-lable">3</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="index.html" class="ec-header-btn"><i class="fi-rr-home"></i></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="wishlist.html" class="ec-header-btn"><i class="fi-rr-heart"></i><span
                            class="ec-cart-noti">4</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="login.html" class="ec-header-btn"><i class="fi-rr-user"></i></a>
                </div>

            </div>
        </div>
    </div>
     
    <!-- Footer navigation panel for responsive display end -->



   

  

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
    <script src="assets/js/plugins/nouislider.js"></script>

    <!-- Main Js -->
    <script src="assets/js/vendor/index.js"></script>
    <script src="assets/js/main.js?v=<?php echo time(); ?>"></script>
    <script src="assets/script.js"></script>
    
<script>
      $(document).ready(function() {
        $('.quickview').click(function(e) {
            e.preventDefault(); // Prevent default behavior of anchor tag

            var p_id = $(this).data('tooltip'); // Get the size from data-tooltip attribute
            $.ajax({
                url: 'php/get_data.php',
                method: 'GET',
                data: { p_id: p_id }, // Send the size as data to PHP
                success: function(response) {
                    $('#popupContent').html(response);
                    $('#popupModal').modal('show');
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    // Handle error here
                }
            });
        });
    });
</script>

<script>
   $(document).ready(function(){
    // Function to fetch data based on checked checkboxes
    function fetchData() {
        var checkedCategories = []; 
        $("input[type='checkbox']:checked").each(function(){
          if ($(this).hasClass('category-checkbox')) {
                checkedCategories.push($(this).val()); // Collect the value of the category checkbox
          }
        });
        // AJAX request to send checked items to server
        $.ajax({
            url: 'php/fetch_data.php', // Replace with your server-side script URL
            type: 'POST',
            data: {items: checkedCategories},
            success: function(response) {
                // Handle the response from server
                console.log(response);
                // Display the data retrieved from database
                $('#recordsContainer').html(response);
            },
            error: function(xhr, status, error) {
                // Handle errors
                console.error(xhr.responseText);
            }
        });
    }

    // Call fetchData function when a checkbox is checked or unchecked
    $("input[type='checkbox'][value!='']").change(fetchData);

    // Initial data fetch when page loads
    fetchData();
});


</script>
<script>
   $(document).ready(function(){
    // Function to fetch data based on checked checkboxes
    function fetchData() {
        var checkedSizes = [];
        $("input[type='checkbox']:checked").each(function(){
            if ($(this).hasClass('size-checkbox')) {
                checkedSizes.push($(this).val()); // Collect the value of the category checkbox
            }
        });
        // AJAX request to send checked items to server
        $.ajax({
            url: 'php/fetch_data_size.php', // Replace with your server-side script URL
            type: 'POST',
            data: {sizes:checkedSizes},
            success: function(response) {
                // Handle the response from server
                console.log(response);
                // Display the data retrieved from database
                $('#recordsContainer').html(response);
            },
            error: function(xhr, status, error) {
                // Handle errors
                console.error(xhr.responseText);
            }
        });
    }

    // Call fetchData function when a checkbox is checked or unchecked
    $("input[type='checkbox'][value!='']").change(fetchData);

    // Initial data fetch when page loads
    fetchData();
});


</script>
<script>
function addToWishlist(productId) {
    // Assuming you have an AJAX request to send the product ID to the backend
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "php/wishlist.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle response from the backend if needed
            console.log("Product added to wishlist!");
            window.location.reload();
        }
    };
    var data = JSON.stringify({ productId: productId });
    xhr.send(data);
}


</script>
<script>
    // remove to wish lost 
function removeToWishlist(productId) {
    // Assuming you have an AJAX request to send the product ID to the backend
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "php/remove_wishlist.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle response from the backend if needed
            console.log("Product remove to wishlist!");
            window.location.reload();
        }
    };
    var data = JSON.stringify({ productId: productId });
    xhr.send(data);
}

</script>

<!-- chat bot </script> -->
<script>
document.addEventListener('click', function(event) {
  var popup = document.getElementById('popup');
  var chatBtn = document.querySelector('.toggle-popup');

  // Check if the click event occurred inside the popup or on the chat button
  var isClickInsidePopup = popup.contains(event.target);
  var isClickOnChatBtn = chatBtn.contains(event.target);

  // If the click is outside the popup and not on the chat button, close the popup
  if (!isClickInsidePopup && !isClickOnChatBtn) {
    closePopup();
  }
});

function togglePopup() {
  var popup = document.getElementById("popup");
  popup.style.display = (popup.style.display === "block") ? "none" : "block";
}

 function closePopup(event) {
    // event.stopPropagation();
    var popup = document.getElementById("popup");
    popup.style.display = "none";
  }

function sendMessage() {
  // Add your sendMessage logic here
}
</script>


</body>

</html>