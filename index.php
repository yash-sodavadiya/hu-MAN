<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./card.css">
    <link rel="stylesheet" href="./brand.css">
</head>
<body>
    <?php require("components/navbar.php") ?>

    <!-- hero section  -->
    <div class="container-fluid">
        <div class="row hero-section">

        <!-- left side of cover  -->
            <div class="col-sm-7 cover1">
               <div class="cover-img">
                <img src="./images/cover-photo/cover-bg.png" alt="">
               </div>
               <div class="cover-txt">
                <p>SUIT FOR MAN</p>
                <span>Fasion Trend</span>
                <div class="line"></div>
                <a href="#">Shop Now</a>
               </div>
            </div>

            <!-- right side cover  -->
            <div class="col-sm-5">

            <!-- top  -->
                <div class="row cover2">
                <div class="cover2-txt">
                    <p>ACCESORIES</p>
                <div class="line"></div>
                <a href="#">Shop Now</a>
                    </div>
                    <div class="cover2-img">
                        <img src="images/cover-photo/cover3.png" alt="">
                    </div>  
                </div>

                <!-- bottom -->
                <div class="row cover3">
                    <div class="col-sm-6 cover3-1">
                    <div class="cover3-img">
                <img src="images/cover-photo/cover1.png" alt="">
               </div>
               <div class="cover3-txt">
                <p><span>MAN'S </span> FASHION</p>
                
                <a href="#">Shop Now</a>
               </div>
                    </div>
                    <div class="col-sm-6 cover3-2">
                    <div class="cover3-txt">
                <p><span>MAN'S </span> SHOES</p>
                
                <a href="#">Shop Now</a>
               </div>
                    <div class="cover3-img cover3-1-img">
                <img src="images/cover-photo/cover4.png" alt="">
               </div>
               
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <!-- catagory section in home  -->

    <div class="row">
        <div class="category-select">
            <a href="#" aria-expanded="true" class="active"><span>Men's Fashion</span></a><span class="single-line">|</span>
            <a href="#"><span>Accesories</span></a><span class="single-line">|</span>
            <a href="#"><span>Shoes</span></a>
        </div>
    </div>

    <div class="container-fluid collection-card">
        <div class="row">
        <?php require("components/card.php") ?>
        <?php require("components/card.php") ?>
        <?php require("components/card.php") ?>
        <?php require("components/card.php") ?>
            
        </div>
    </div>

    <div class="container-fluid discount">
        <div class="discount-banner"></div>
    </div>


    <!-- brand section  -->
    <div class="container-fluid" style="background-color:#000; height: 626px;">
        <div class="row  brands">
            <div class="col-sm-4 brand-txt">
                <p>OUR PARTNERS</p>
                <h2>BRANDS WE ARE AFFILIATED WITH</h2>
                <span>Integer suscipit urna metus, in efficitur turpis ullamcorper in. Cras nec tincidunt mi. Donec in dapibus ex. Morbi malesuada lorem rutrum, scelerisque risus et</span><br>
                <button class="button">
  EXPLORE MORE
</button>
            </div>
            <div class="col-sm-8">
                <div class="row" style="margin-top: 0px;" >

                <?php require("components/brand-logo.php") ?>
                </div>
            </div>
        </div>
    </div>


    <!-- footer  -->
    <?php require("components/footer.php") ?>
</body>
</html>