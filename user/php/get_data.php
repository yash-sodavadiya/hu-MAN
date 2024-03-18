<?php
require("../database/config.php");

// Get the size from the AJAX request
$p_id = $_GET['p_id'];


$sql = "SELECT * FROM `product_tbl` WHERE `product_id` = '$p_id' ";
$result = mysqli_query($conn,$sql);
foreach($result as $row)
{
    $catagory = $row['catagory_name'];

// Assuming you have some query to fetch data from the database based on size
$query = "SELECT * FROM `$catagory` WHERE `p_id` = '$p_id' ";

// Execute the query
$result = mysqli_query($conn, $query);

// Fetch data and display it
if ($result && mysqli_num_rows($result) > 0) {
    while ($row1 = mysqli_fetch_assoc($result)) { ?>
        <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                           
                             <div class="qty-product-cover">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="../admin/assets/img/product/<?php echo $row1['p_image'];?>" alt="">
                                </div>
                                
                                
                            </div> 
                            
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="quickview-pro-content">
                                <h5 class="ec-quick-title"><a href="product-left-sidebar.html"><?php echo $row1['p_name']?></a>
                                </h5>
                                

                                <div class="ec-quickview-desc"><?php echo $row1['p_description2']?></div>
                                <div class="ec-quickview-price">
                                    <span class="old-price">₹<?php echo $row1['p_mrp']?></span>
                                    <span class="new-price">₹<?php echo $row1['p_final_price']?></span>
                                </div>
                                <?php
                                    if($catagory == "perfume_tbl")
                                    {
                                        echo "";
                                    }else{
                                ?>
                                <div class="ec-pro-variation">
                                
                                    <div class="ec-pro-variation-inner ec-pro-variation-color">
                                        <span>Color</span>
                                        <div class="ec-pro-color">
                                        <ul class="ec-opt-swatch ">
                                                        <li class="active"><span
                                                                    style="background-color:<?php echo $row1['p_color'];?>;"></span></li>
                                                      
                                                    </ul>
                                        </div>
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
                                    <?php }?>
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
   <?php }
} else {
    echo "No data found";
}
}
// Close the database connection
mysqli_close($conn);
?>
