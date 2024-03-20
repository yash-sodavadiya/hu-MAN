 <?php session_start()?>
 <!DOCTYPE html>
 <html lang="en">
 
 
<head>
     <meta charset="UTF-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
 
     <title>hu-MAN | Product Details</title>
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
     <link rel="stylesheet" href="assets/css/style.css" />
     <link rel="stylesheet" href="assets/css/responsive.css" />
 
     <!-- Background css -->
     <link rel="stylesheet" id="bg-switcher-css" href="assets/css/backgrounds/bg-4.css">
 </head>
<body class="product_page">
    <!-- <div id="ec-overlay">
        <div class="ec-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> -->

    <?php require("components/navbar.php");?>
    
    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Single Products</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Products</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Sart Single product -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-pro-rightside ec-common-rightside col-lg-12 col-md-12">

                    <!-- Single product content Start -->
                    <div class="single-pro-block">
                        <div class="single-pro-inner">
                            <div class="row">
                                <?php
                                    if(isset($_GET['p_id']))
                                    {
                                        $p_id = $_GET['p_id'];
                                        $sql = "SELECT * FROM `product_tbl` WHERE `product_id` = '$p_id' ";
            $result = mysqli_query($conn, $sql);

            foreach($result as $row) {
                $catagory = $row['catagory_name'];
                $p_id = $row['product_id'];
                $sql1 = "SELECT * FROM `$catagory` WHERE `p_id` = $p_id";
                $result1 = mysqli_query($conn, $sql1);
                foreach($result1 as $row1) { ?>

<div class="single-pro-img single-pro-img-no-sidebar">
                                    <div class="single-product-scroll">
                                        <div class="single-product-cover">
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive" src="../admin/assets/img/product/<?php echo $row1['p_image']?>"
                                                    alt="" >
                                            </div>
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive" src="../admin/assets/img/product/<?php echo $row1['p_img1']?>"
                                                    alt="">
                                            </div>
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive" src="../admin/assets/img/product/<?php echo $row1['p_img2']?>"
                                                    alt="">
                                            </div>
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive" src="../admin/assets/img/product/<?php echo $row1['p_img3']?>"
                                                    alt="">
                                            </div>
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive" src="../admin/assets/img/product/<?php echo $row1['p_img4']?>"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="single-nav-thumb">
                                            <div class="single-slide">
                                                <img class="img-responsive" src="../admin/assets/img/product/<?php echo $row1['p_image']?>"
                                                    alt="">
                                            </div>
                                            <div class="single-slide">
                                                <img class="img-responsive" src="../admin/assets/img/product/<?php echo $row1['p_img1']?>"
                                                    alt="">
                                            </div>
                                            <div class="single-slide">
                                                <img class="img-responsive" src="../admin/assets/img/product/<?php echo $row1['p_img2']?>"
                                                    alt="">
                                            </div>
                                            <div class="single-slide">
                                                <img class="img-responsive" src="../admin/assets/img/product/<?php echo $row1['p_img3']?>"
                                                    alt="">
                                            </div>
                                            <div class="single-slide">
                                                <img class="img-responsive" src="../admin/assets/img/product/<?php echo $row1['p_img4']?>"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-pro-desc single-pro-desc-no-sidebar">
                                    <div class="single-pro-content">
                                        <h5 class="ec-single-title"><?php echo $row1['p_name']?></h5>
                                        
                                        <div class="ec-single-desc"><?php echo $row1['p_description2']?></div>

                                        
                                        <div class="ec-single-price-stoke">
                                            <div class="ec-single-price">
                                                <span class="ec-single-ps-title">As low as</span>
                                                <span class="new-price">₹<?php echo $row1['p_final_price']?></span>
                                            </div>
                                            <div class="ec-single-stoke">
                                                <span class="ec-single-ps-title">IN STOCK</span>
                                                <span class="ec-single-sku"><?php echo $row1['p_stock']?></span>
                                            </div>
                                        </div>
                                        <div class="ec-pro-variation">
                                            <?php if($catagory == 'perfume_tbl'){
                                                echo "";
                                            } else{?>
                                            <div class="ec-pro-variation-inner ec-pro-variation-size">
                                                <span>SIZE</span>
                                                <div class="ec-pro-variation-content">
                                                    <ul>
                                                    <?php
													$p_id = $row1['p_id'] ;
    $sql = "SELECT * FROM `size_tbl` WHERE `p_id` = $p_id";
    $result = mysqli_query($conn, $sql);
    foreach($result as $row){ ?>
<li class="active"><?php echo $row['p_size'];?></li>
   <?php  } ?>
                                                 
                                                    </ul>
                                                </div>
                                            </div>
    <?php } ?>
    <?php if($catagory == 'perfume_tbl'){
                                                echo "";
                                            } else{?>
                                            <div class="ec-pro-variation-inner ec-pro-variation-color">
                                                <span>Color</span>
                                                <div class="ec-pro-variation-content">
                                                    <ul>
                                                        <li class="active"><span
                                                                style="background-color:<?php echo $row1['p_color']?>;"></span></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <?php  } ?>    
                                        <div class="ec-single-qty">
                                           
                                            <div class="ec-single-cart ">
                                            <form action="php/add_cart.php" method="post" enctype="multipart/form-data">
                                                            <input type="hidden" name="p_id" value="<?php echo $row1['p_id'];?>">
                                                            <input type="hidden" name="quantity" value="1">
                                                           
                                                            <input type="hidden" name="sub_total" value="<?php echo $row1['p_final_price'];?>">
                                                <button type="submit" class="btn btn-primary" name="add_cart" >Add To Cart</button>
    </form>
                                            </div>
                                            <div class="ec-single-wishlist">
                                                <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                            </div>
                                            
                                        </div>
                                        <div class="ec-single-social">
                                            <ul class="mb-0">
                                                <li class="list-inline-item facebook"><a href="#"><i
                                                            class="ecicon eci-facebook"></i></a></li>
                                                <li class="list-inline-item twitter"><a href="#"><i
                                                            class="ecicon eci-twitter"></i></a></li>
                                                <li class="list-inline-item instagram"><a href="#"><i
                                                            class="ecicon eci-instagram"></i></a></li>
                                                <li class="list-inline-item youtube-play"><a href="#"><i
                                                            class="ecicon eci-youtube-play"></i></a></li>
                                                <li class="list-inline-item behance"><a href="#"><i
                                                            class="ecicon eci-behance"></i></a></li>
                                                <li class="list-inline-item whatsapp"><a href="#"><i
                                                            class="ecicon eci-whatsapp"></i></a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                </div>
                        </div>
                    </div>
                    <!--Single product content End -->
                    <!-- Single product tab start -->
                    <div class="ec-single-pro-tab">
                        <div class="ec-single-pro-tab-wrapper">
                            <div class="ec-single-pro-tab-nav">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab"
                                            data-bs-target="#ec-spt-nav-details" role="tab" aria-controls="ec-spt-nav-details" aria-selected="true">Detail</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-info"
                                             role="tab" aria-controls="ec-spt-nav-info" aria-selected="false">More Information</a>
                                    </li>
                                   
                                </ul>
                            </div>
                            <div class="tab-content  ec-single-pro-tab-content">
                                <div id="ec-spt-nav-details" class="tab-pane fade show active">
                                    <div class="ec-single-pro-tab-desc">
                                        <p><?php echo $row1['p_description1']?>
                                        </p>
                                       
                                    </div>
                                </div>
                                <div id="ec-spt-nav-info" class="tab-pane fade">
                                    <?php 
                                        if($catagory == 'shirt_tbl')
                                        { ?>
                                            <div class="ec-single-pro-tab-moreinfo">
                                        <ul>
                                            <li><span>Pattern</span> <?php echo $row1['c_pattern']?></li>
                                            <li><span>Material type</span> <?php echo $row1['s_material_type']?></li>
                                            <li><span>Sleeve Type</span> <?php echo $row1['c_sleeve_type']?></li>
                                            <li><span>Length</span> <?php echo $row1['c_length']?></li>
                                        </ul>
                                    </div>
                                      <?php  }
                                      if($catagory == 'perfume_tbl')
                                      { ?>
                                          <div class="ec-single-pro-tab-moreinfo">
                                      <ul>
                                          <li><span>Brand</span> <?php echo $row1['p_brand']?></li>
                                          <li><span>Item Form</span> <?php echo $row1['p_item_form']?></li>
                                          <li><span>Item Volume</span> <?php echo $row1['p_item_volume']?></li>
                                          <li><span>Scent</span> <?php echo $row1['p_scent']?></li>
                                      </ul>
                                  </div>
                                    <?php  }
                                    if($catagory == 'pent_tbl')
                                    { ?>
                                        <div class="ec-single-pro-tab-moreinfo">
                                    <ul>
                                        <li><span>Material Type</span> <?php echo $row1['p_material_type']?></li>
                                        <li><span>Length</span> <?php echo $row1['p_length']?></li>
                                        <li><span>Style</span> <?php echo $row1['p_style']?></li>
                                        <li><span>Closure Type</span> <?php echo $row1['p_closure_type']?></li>
                                    </ul>
                                </div>
                                    <?php } 
                                    if($catagory == 'shoes_tbl')
                                    { ?>
                                        <div class="ec-single-pro-tab-moreinfo">
                                    <ul>
                                        <li><span>Material Type</span> <?php echo $row1['s_material_type']?></li>
                                        <li><span>Closure Type</span> <?php echo $row1['s_closure_type']?></li>
                                        <li><span>Heel Type</span> <?php echo $row1['s_heel_type']?></li>
                                        <li><span>Water Resistance Level</span> <?php echo $row1['s_w_r_l']?></li>
                                        <li><span>Sole Material</span> <?php echo $row1['s_sole_material']?></li>
                                        <li><span>Style</span> <?php echo $row1['s_style']?></li>
                                    </ul>
                                </div>
                                    <?php } ?>
                                    
                                </div>

                                

<?php }
                                }
                             }

                                ?>
                                
                            
                            </div>
                        </div>
                    </div>
                    <!-- product details description area end -->
                </div>

            </div>
        </div>
    </section>
    <!-- End Single product -->

    <!-- Related Product Start -->

    <section class="section ec-releted-product section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Related products</h2>
                        <h2 class="ec-title">Related products</h2>
                        <p class="sub-title">Browse The Collection of Top Products</p>
                    </div>
                </div>
            </div>
            <div class="row margin-minus-b-30">
                <!-- Related Product Content -->
                <?php 
                    $p_id = $_GET['p_id'];
                                    $sql = "SELECT * FROM `product_tbl` WHERE `product_id` = $p_id";
                                    $result = mysqli_query($conn,$sql);
                                    foreach($result as $row)
                                    {
                                        $catagory = $row['catagory_name'];
                                        $p_id = $row['product_id'];

                                        $sql1 = "SELECT * FROM `$catagory` LIMIT 4";
                                        $result1 = mysqli_query($conn,$sql1);
                                        foreach($result1 as $row1)
                                    { ?>
                                    
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content"
                                    data-animation="fadeIn"  style = "padding-top:10px;">
                                    <div class="ec-product-inner" style = "box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px; padding:13px; margin-left: 2px;">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image" style="height: 295px;">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="../admin/assets/img/product/<?php echo $row1['p_image'];?>"
                                                        alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <a href="" class="quickview" data-tooltip="<?php echo $row1['p_id']?>" ><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>


                                                        <!-- form tag for add cart item  -->

                                                        <form action="php/add_cart.php" method="post" enctype="multipart/form-data">
                                                            <input type="hidden" name="p_id" value="<?php echo $row1['p_id'];?>">
                                                            <input type="hidden" name="quantity" value="1">
                                                           
                                                            <input type="hidden" name="sub_total" value="<?php echo $row1['p_final_price'];?>">
                                                            <button title="Add To Cart" name="add_cart" class="add-to-cart"><i
                                                            class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                        </form>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-details?p_id=<?php echo $row1['p_id'];?>"><?php echo $row1['p_name'];?></a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">₹<?php echo $row1['p_mrp'];?></span>
                                                <span class="new-price">₹<?php echo $row1['p_final_price'];?></span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ">
                                                        <li class="active"><span
                                                                    style="background-color:<?php echo $row1['p_color'];?>;"></span></li>
                                                      
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                    <?php
													$p_id = $row1['p_id'] ;
    $sql = "SELECT * FROM `size_tbl` WHERE `p_id` = $p_id";
    $result = mysqli_query($conn, $sql);
    foreach($result as $row){ ?>
<li class="active"><a href="#" class="ec-opt-sz"
                                                                data-old="$25.00" data-new="$20.00"
                                                                data-tooltip="Small"><?php echo $row['p_size'];?></a></li>
   <?php  } ?>
                                                        
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                    
                                    <?php }
                                    }
                                ?>
                
            </div>
        </div>
    </section>
    <!-- Related Product end -->

   

    <!-- 360 Modal -->
    <div class="modal fade" id="ec_360_view_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row ec-product-360">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="ec-360-panel ec-360-panel-default">
                                <a class="btn btn-default ec-360-btn qty_close" data-bs-dismiss="modal"
                                    aria-label="Close">×</a>
                                <div class="ec-360-panel-body">
                                    <div id="circlr" class="ec-circlr">
                                        <img data-src="assets/images/product-360/00.jpg" src="assets/images/product-360/00.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/01.jpg" src="assets/images/product-360/01.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/02.jpg" src="assets/images/product-360/02.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/03.jpg" src="assets/images/product-360/03.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/04.jpg" src="assets/images/product-360/04.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/05.jpg" src="assets/images/product-360/05.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/06.jpg" src="assets/images/product-360/06.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/07.jpg" src="assets/images/product-360/07.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/08.jpg" src="assets/images/product-360/08.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/09.jpg" src="assets/images/product-360/09.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/10.jpg" src="assets/images/product-360/10.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/11.jpg" src="assets/images/product-360/11.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/12.jpg" src="assets/images/product-360/12.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/13.jpg" src="assets/images/product-360/13.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/14.jpg" src="assets/images/product-360/14.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/15.jpg" src="assets/images/product-360/15.jpg" alt="product image">
                                        <div id="loader" class="ec-img-loader"></div>
                                    </div>
                                </div>
                                <p class="ec-tool-play">
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.play(); return false;"><i class="fi-rr-play"></i></a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.stop(); return false;"><i class="fi-rr-stop"></i></a>
                                </p>
                            </div>
                        </div>

                        <div class="ec-tool-box-sec">
                            <div class="ec-tool-box space-b-15">
                                <h4>Cycle</h4>
                                <label class="ec-switch">
                                    <input class="ec-cycle" type="checkbox">
                                    <span class="ec-slider"></span>
                                </label>
                            </div>

                            <div class="ec-tool-box space-b-15">
                                <h4>Reverse</h4>
                                <label class="ec-switch">
                                    <input class="ec-reverse" type="checkbox">
                                    <span class="ec-slider"></span>
                                </label>
                            </div>

                            <div class="ec-tool-box space-b-15">
                                <h4>Vertical</h4>
                                <label class="ec-switch">
                                    <input class="ec-vertical" type="checkbox">
                                    <span class="ec-slider"></span>
                                </label>
                            </div>

                            <div class="ec-tool-box-2 space-b-15">
                                <h4>Rotation</h4>
                                <p>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.turn(9); return false;">9</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.turn(8); return false;">8</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.turn(7); return false;">7</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.turn(6); return false;">6</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.turn(5); return false;">5</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.turn(4); return false;">4</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.turn(3); return false;">3</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.turn(2); return false;">2</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.turn(1); return false;">1</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.turn(0); return false;">0</a>
                                </p>
                            </div>

                            <div class="ec-tool-box-2">
                                <h4>Goto n frame</h4>
                                <p>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.go(9); return false;">9</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.go(8); return false;">8</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.go(7); return false;">7</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.go(6); return false;">6</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.go(5); return false;">5</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.go(4); return false;">4</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.go(3); return false;">3</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.go(2); return false;">2</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.go(1); return false;">1</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.go(0); return false;">0</a>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->

    <!-- Modal -->
    <div class="modal fade" id="ec_quickview_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <!-- Swiper -->
                            <div class="qty-product-cover">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_1.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_2.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_3.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_4.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_5.jpg" alt="">
                                </div>
                            </div>
                            <div class="qty-nav-thumb">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_1.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_2.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_3.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_4.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="quickview-pro-content">
                                <h5 class="ec-quick-title"><a href="product-left-sidebar.html">Handbag leather purse for women</a>
                                </h5>
                                <div class="ec-quickview-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>

                                <div class="ec-quickview-desc">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1500s,</div>
                                <div class="ec-quickview-price">
                                    <span class="old-price">$100.00</span>
                                    <span class="new-price">$80.00</span>
                                </div>

                                <div class="ec-pro-variation">
                                    <div class="ec-pro-variation-inner ec-pro-variation-color">
                                        <span>Color</span>
                                        <div class="ec-pro-color">
                                            <ul class="ec-opt-swatch">
                                                <li><span style="background-color:#696d62;"></span></li>
                                                <li><span style="background-color:#d73808;"></span></li>
                                                <li><span style="background-color:#577023;"></span></li>
                                                <li><span style="background-color:#2ea1cd;"></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ec-pro-variation-inner ec-pro-variation-size ec-pro-size">
                                        <span>Size</span>
                                        <div class="ec-pro-variation-content">
                                            <ul class="ec-opt-size">
                                                <li class="active"><a href="#" class="ec-opt-sz"
                                                        data-tooltip="Small">S</a></li>
                                                <li><a href="#" class="ec-opt-sz" data-tooltip="Medium">M</a></li>
                                                <li><a href="#" class="ec-opt-sz" data-tooltip="Large">X</a></li>
                                                <li><a href="#" class="ec-opt-sz" data-tooltip="Extra Large">XL</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ec-quickview-qty">
                                    <div class="qty-plus-minus">
                                        <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                                    </div>
                                    <div class="ec-quickview-cart ">
                                        <button class="btn btn-primary"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->

    

    <?php require("components/footer.php");?>

     <!-- Modal -->
     <div id="popupModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>

            <div class="modal-body" id="popupContent">

            </div>
        </div>
    </div>
    <!-- Modal end -->

    <!-- Cart Floating Button -->
    <div class="ec-cart-float">
        <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
            <div class="header-icon"><i class="fi-rr-shopping-basket"></i>
            </div>
            <span class="ec-cart-count cart-count-lable">3</span>
        </a>
    </div>
    <!-- Cart Floating Button end -->

    <!-- Whatsapp -->
    <div class="ec-style ec-right-bottom">
        <!-- Start Floating Panel Container -->
        <div class="ec-panel">
            <!-- Panel Header -->
            <div class="ec-header">
                <strong>Need Help?</strong>
                <p>Chat with us on WhatsApp</p>
            </div>
            <!-- Panel Content -->
            <div class="ec-body">
                <ul>
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266"
                            data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="assets/images/whatsapp/profile_01.jpg" class="ec-user-img"
                                        alt="Profile image">
                                    <span class="ec-status-icon"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Sahar Darya</span>
                                    <p>Sahar left 7 mins ago</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266"
                            data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="assets/images/whatsapp/profile_02.jpg" class="ec-user-img"
                                        alt="Profile image">
                                    <span class="ec-status-icon ec-online"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Yolduz Rafi</span>
                                    <p>Yolduz is online</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266"
                            data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="assets/images/whatsapp/profile_03.jpg" class="ec-user-img"
                                        alt="Profile image">
                                    <span class="ec-status-icon ec-offline"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Nargis Hawa</span>
                                    <p>Nargis left 30 mins ago</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266"
                            data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="assets/images/whatsapp/profile_04.jpg" class="ec-user-img"
                                        alt="Profile image">
                                    <span class="ec-status-icon ec-offline"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Khadija Mehr</span>
                                    <p>Khadija left 50 mins ago</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                </ul>
            </div>
        </div>
        <!--/ End Floating Panel Container -->
        <!-- Start Right Floating Button-->
        <?php require("components/whatsapp.php") ?>
        <!--/ End Right Floating Button-->
    </div>
    <!-- Whatsapp end -->

    <!-- Feature tools -->
    <div class="ec-tools-sidebar-overlay"></div>
    <div class="ec-tools-sidebar">
        <div class="tool-title">
            <h3>Features</h3>
        </div>
        <a href="#" class="ec-tools-sidebar-toggle in-out">
            <img alt="icon" src="assets/images/common/settings.png" />
        </a>
        <div class="ec-tools-detail">
            <div class="ec-tools-sidebar-content ec-change-color ec-color-desc">
                <h3>Color Scheme</h3>
                <ul class="bg-panel">
                    <li class="active" data-color="01"><a href="#" class="colorcode1"></a></li>
                    <li data-color="02"><a href="#" class="colorcode2"></a></li>
                    <li data-color="03"><a href="#" class="colorcode3"></a></li>
                    <li data-color="04"><a href="#" class="colorcode4"></a></li>
                    <li data-color="05"><a href="#" class="colorcode5"></a></li>
                </ul>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Backgrounds</h3>
                <ul class="bg-panel">
                    <li class="bg"><a class="back-bg-1" id="bg-1">Background-1</a></li>
                    <li class="bg"><a class="back-bg-2" id="bg-2">Background-2</a></li>
                    <li class="bg"><a class="back-bg-3" id="bg-3">Background-3</a></li>
                    <li class="bg"><a class="back-bg-4" id="bg-4">Default</a></li>
                </ul>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Full Screen mode</h3>
                <div class="ec-fullscreen-mode">
                    <div class="ec-fullscreen-switch">
                        <div class="ec-fullscreen-btn">Mode</div>
                        <div class="ec-fullscreen-on">On</div>
                        <div class="ec-fullscreen-off">Off</div>
                    </div>
                </div>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Dark mode</h3>
                <div class="ec-change-mode">
                    <div class="ec-mode-switch">
                        <div class="ec-mode-btn">Mode</div>
                        <div class="ec-mode-on">On</div>
                        <div class="ec-mode-off">Off</div>
                    </div>
                </div>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>RTL mode</h3>
                <div class="ec-change-rtl">
                    <div class="ec-rtl-switch">
                        <div class="ec-rtl-btn">Rtl</div>
                        <div class="ec-rtl-on">On</div>
                        <div class="ec-rtl-off">Off</div>
                    </div>
                </div>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Clear local storage</h3>
                <a class="clear-cach" href="javascript:void(0)">Clear Cache & Default</a>
            </div>
        </div>
    </div>
    <!-- Feature tools end -->

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

</body>

</html>