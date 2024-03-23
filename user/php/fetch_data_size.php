<?php 
    require("../database/config.php");

    if(isset($_POST['sizes']) ) {
        $sizes = $_POST['sizes'];

        
        // Sanitize input to prevent SQL injection
        $sizes = array_map(array($conn, 'real_escape_string'), $sizes);
    
        $resultsSize = array();
    
        // Loop through each selected item
        foreach ($sizes as  $size) {
            // Construct the SQL query for each item
            $sqlSize = "SELECT * FROM `size_tbl` where `p_size` = '$size' ";
            
            // Execute the query
            $resultSize = $conn->query($sqlSize);
            foreach($resultSize as $rowSize)
            {
                $p_id = $rowSize['p_id'];
                $sqlProduct = "SELECT * FROM `product_tbl` where `product_id` = '$p_id' ";
                $resultProduct = mysqli_query($conn,$sqlProduct);
                foreach($resultProduct as $rowProduct)
                {
                    $category = $rowProduct['catagory_name'];
                    echo $category;
                    $sql = "SELECT * FROM `$category` WHERE `p_id` = '$p_id' ";
                    $result = $conn->query($sql);
            if ($result) {
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
    
                       // Generate HTML content for each product
                       $html_content = '
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content"
                    data-animation="fadeIn" id="records"  style = "padding-top:10px; opacity:1;">
                    <div class="ec-product-inner" style = "box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px; padding:13px; margin-left: 2px;">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image" style="height: 295px; display:flex; align-items:center;">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image" src="../admin/assets/img/product/'.$row['p_image'].'" alt="Product" />
                                </a>
                                <span class="percentage">20%</span>
                                <a href="" class="quickview" data-tooltip="'.$row['p_id'].'" ><i class="fi-rr-eye"></i></a>
                                <div class="ec-pro-actions">
                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                    <form action="php/add_cart.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="p_id" value="'.$row['p_id'].'">
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="sub_total" value="'.$row['p_final_price'].'">
                                        <button title="Add To Cart" name="add_cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                    </form>';
                    
                    // Check if the product is in the wishlist
                    $p_id = $row['p_id'];
                    $sql4 = "SELECT * FROM `wishlist_tbl` WHERE `p_id` = '$p_id'";
                    $result4 = mysqli_query($conn, $sql4);
                    $inWishlist = mysqli_num_rows($result4) > 0;
        
                    // Display the heart icon accordingly
                    if ($inWishlist) {
                        $html_content .= '<a class="ec-btn-group wishlist active" title="Wishlist" onclick="removeToWishlist(\''.$p_id.'\')"><i class="fi-rr-heart"></i></a>';
                    } else {
                        $html_content .= '<a class="ec-btn-group wishlist" title="Wishlist" onclick="addToWishlist(\''.$p_id.'\')"><i class="fi-rr-heart"></i></a>';
                    }
        
                    $html_content .= '</div>
                            </div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title"><a href="product-details?p_id='.$row['p_id'].'">'.$row['p_name'].'</a></h5>
                            <div class="ec-pro-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>
                            <span class="ec-price">
                                <span class="old-price">₹'.$row['p_mrp'].'</span>
                                <span class="new-price">₹'.$row['p_final_price'].'</span>
                            </span>
                            <div class="ec-pro-option">
                                <div class="ec-pro-color">
                                    <span class="ec-pro-opt-label">Color</span>';
                                    if($row['p_catagory'] != "perfume") {
                                        $html_content .= '<ul class="ec-opt-swatch ">
                                            <li class="active"><span style="background-color:'.$row['p_color'].';"></span></li>
                                        </ul>';
                                    }
                                    $html_content .= '</div>
                                    <div class="ec-pro-size">
                                        <span class="ec-pro-opt-label">Size</span>
                                        <ul class="ec-opt-size">';
                                        $sql_size = "SELECT * FROM `size_tbl` WHERE `p_id` = '$p_id'";
                                        $result_size = mysqli_query($conn, $sql_size);
                                        foreach($result_size as $row_size) {
                                            $html_content .= '<li class="active"><a href="#" class="ec-opt-sz">'.$row_size['p_size'].'</a></li>';
                                        }
                                        $html_content .= '</ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
    
                        // Add the constructed HTML content to the $results array
                        $resultsSize[] = $html_content;
                    }
                } else {
                    $resultsSize[] = "0 results for $size";
                }
            } 
                
        
            else {
                // Output any SQL error
                $resultsSize[] = "Error fetching data from $size: " . $conn->error;
            }
        }
        }
    }
    
        // Output the results
        echo implode("", $resultsSize);
    } 
    else {
        $results1 = array();
    
        $sqlProduct = "SELECT * FROM `product_tbl`";
        $resultProduct = mysqli_query($conn, $sqlProduct);
        
        foreach ($resultProduct as $rowProduct) {
            $catagory = $rowProduct['catagory_name'];
            $p_id = $rowProduct['product_id'];
            $sql = "SELECT *
                    FROM `$catagory` where `p_id` = '$p_id'";
            $result = mysqli_query($conn, $sql);
        
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    
                    // Generate HTML content for each product
                    $html_content = '
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content"
                    data-animation="fadeIn" id="records"  style = "padding-top:10px; opacity:1;">
                    <div class="ec-product-inner" style = "box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px; padding:13px; margin-left: 2px;">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image" style="height: 295px; display:flex; align-items:center;">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image" src="../admin/assets/img/product/'.$row['p_image'].'" alt="Product" />
                                </a>
                                <span class="percentage">20%</span>
                                <a href="" class="quickview" data-tooltip="'.$row['p_id'].'" ><i class="fi-rr-eye"></i></a>
                                <div class="ec-pro-actions">
                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                    <form action="php/add_cart.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="p_id" value="'.$row['p_id'].'">
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="sub_total" value="'.$row['p_final_price'].'">
                                        <button title="Add To Cart" name="add_cart" class="add-to-cart"><i class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                    </form>';
                    
                    // Check if the product is in the wishlist
                    $sql4 = "SELECT * FROM `wishlist_tbl` WHERE `p_id` = '$p_id'";
                    $result4 = mysqli_query($conn, $sql4);
                    $inWishlist = mysqli_num_rows($result4) > 0;
        
                    // Display the heart icon accordingly
                    if ($inWishlist) {
                        $html_content .= '<a class="ec-btn-group wishlist active" title="Wishlist" onclick="removeToWishlist(\''.$p_id.'\')"><i class="fi-rr-heart"></i></a>';
                    } else {
                        $html_content .= '<a class="ec-btn-group wishlist" title="Wishlist" onclick="addToWishlist(\''.$p_id.'\')"><i class="fi-rr-heart"></i></a>';
                    }
        
                    $html_content .= '</div>
                            </div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title"><a href="product-details?p_id='.$row['p_id'].'">'.$row['p_name'].'</a></h5>
                            <div class="ec-pro-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>
                            <span class="ec-price">
                                <span class="old-price">₹'.$row['p_mrp'].'</span>
                                <span class="new-price">₹'.$row['p_final_price'].'</span>
                            </span>
                            <div class="ec-pro-option">
                                <div class="ec-pro-color">
                                    <span class="ec-pro-opt-label">Color</span>';
                                    if($row['p_catagory'] != "perfume") {
                                        $html_content .= '<ul class="ec-opt-swatch ">
                                            <li class="active"><span style="background-color:'.$row['p_color'].';"></span></li>
                                        </ul>';
                                    }
                                    $html_content .= '</div>
                                    <div class="ec-pro-size">
                                        <span class="ec-pro-opt-label">Size</span>
                                        <ul class="ec-opt-size">';
                                        $sql_size = "SELECT * FROM `size_tbl` WHERE `p_id` = '$p_id'";
                                        $result_size = mysqli_query($conn, $sql_size);
                                        foreach($result_size as $row_size) {
                                            $html_content .= '<li class="active"><a href="#" class="ec-opt-sz">'.$row_size['p_size'].'</a></li>';
                                        }
                                        $html_content .= '</ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
        
                    // Store the HTML content in the results array
                    $results1[] = $html_content;
        
                    // Break the loop after processing one product
                    break;
                }
            }
        }
        echo implode("",$results1);
        
        
        
    } 
    
?>