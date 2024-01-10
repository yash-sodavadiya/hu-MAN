<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hu-MAN | SHOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/card.css">
    <link rel="stylesheet" href="./css/shop.css">
    <link rel="stylesheet" href="./css/pagination.css">

</head>

<body>

    <!-- navbar  -->
    <?php require("components/navbar.php") ?>

    <div class="conatiner-fluid shop-banner">
        <div class="title">
            <h1>Shop</h1>
            <a href="index.php">Home</a> <span> / </span> <a href="shop.php" class="active">Shop</a>
        </div>

    </div>

    <div class="main-content">
        <div class="shop-left">
            <div class="filter">
                <p class="title">FILTER BY</p>
                <div class="filter1">
                    <div class="filter-title">
                        <p>CATEGORIES</p>
                    </div>
                    <div class="filter-checkbox">
                        <label class="material-checkbox">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            <span class="cat-txt">Suit</span>
                        </label>
                        <label class="material-checkbox">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            <span class="cat-txt">Formal</span>
                        </label>
                        <label class="material-checkbox">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            <span class="cat-txt">Casual</span>
                        </label>
                        <label class="material-checkbox">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            <span class="cat-txt">Watch</span>
                        </label>
                        <label class="material-checkbox">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            <span class="cat-txt"> Shoes </span>
                        </label>
                    </div>
                </div>
                <div class="filter1 colors">
                    <div class="filter-title">
                        <p>COLORS</p>
                    </div>
                    <div class="filter-checkbox">
                        <label class="material-checkbox">
                            <input type="checkbox">
                            <span class="checkmark" style="background-color:green; border:none;"></span>
                            <span class="cat-txt">Green</span>
                        </label>
                        <label class="material-checkbox">
                            <input type="checkbox">
                            <span class="checkmark" style="background-color:red; border:none;"></span>
                            <span class="cat-txt">Red</span>
                        </label>
                        <label class="material-checkbox">
                            <input type="checkbox">
                            <span class="checkmark" style="background-color:orange; border:none;"></span>
                            <span class="cat-txt">Orange</span>
                        </label>
                        <label class="material-checkbox">
                            <input type="checkbox">
                            <span class="checkmark" style="background-color:#000; border:none;"></span>
                            <span class="cat-txt">Black</span>
                        </label>
                        <label class="material-checkbox">
                            <input type="checkbox">
                            <span class="checkmark" style="background-color:blue; border:none;"></span>
                            <span class="cat-txt"> blue </span>
                        </label>
                        <label class="material-checkbox">
                            <input type="checkbox">
                            <span class="checkmark" style="background-color:blue; border:none;"></span>
                            <span class="cat-txt"> blue </span>
                        </label>
                        <label class="material-checkbox">
                            <input type="checkbox">
                            <span class="checkmark" style="background-color:blue; border:none;"></span>
                            <span class="cat-txt"> blue </span>
                        </label>
                        <label class="material-checkbox">
                            <input type="checkbox">
                            <span class="checkmark" style="background-color:blue; border:none;"></span>
                            <span class="cat-txt"> blue </span>
                        </label>
                        <label class="material-checkbox">
                            <input type="checkbox">
                            <span class="checkmark" style="background-color:blue; border:none;"></span>
                            <span class="cat-txt"> blue </span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="shop-right">
            <div class="row">
                <?php require("components/shop-card.php") ?>
                <?php require("components/shop-card.php") ?>
                <?php require("components/shop-card.php") ?>
              
            </div>

          <!-- pagination  -->
          <?php require("components/pagination.php") ?>
        </div>
    </div>
</body>

</html>