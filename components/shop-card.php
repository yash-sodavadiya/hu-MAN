<?php 
    $sql = "select * from product_tbl";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        foreach($result as $row){ ?>
            <div class="col-sm-4">
    <div class="product-grid">
        <div class="product-image">
            <a href="#" class="image">
                <img class="pic-1" src="images/cover-photo/<?php echo $row["product_img"]?> ">
                <img class="pic-2" src="images/cover-photo/<?php echo $row["product_img"]?>">
            </a>
            <span class="product-discount-label">-33%</span>
            <ul class="product-links">
                <li><a href="#" data-tip="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
            </ul>
        </div>
        <div class="product-content">
            <ul class="rating">
                <li class="fas fa-star"></li>
                <li class="fas fa-star"></li>
                <li class="fas fa-star"></li>
                <li class="fas fa-star"></li>
                <li class="far fa-star"></li>
            </ul>
            <h3 class="title"><a href="#"><?php echo $row["product_name"]?></a></h3>
            <div class="price"> $<?php echo $row["product_price"]?> <span>$90.00</span></div>
            <a class="add-to-cart" href="#">add to cart</a>
        </div>
    </div>
</div>
       

       <?php }
    }
?>
       