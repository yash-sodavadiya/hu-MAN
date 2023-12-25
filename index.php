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
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./home.css">
</head>
<body>
    <?php require('./components/navbar.php') ?>

    <div class="container">
        <div class="row">

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
                <img src="cover1.png" alt="">
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
                    <div class="cover3-img">
                <img src="cover2.png" alt="">
               </div>
               
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>