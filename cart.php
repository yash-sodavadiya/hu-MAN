<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hu-MAN | Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/cart.css?v=<?php echo time(); ?>">
</head>

<body>

    <?php require("components/navbar.php") ?>

    <div class="container-fluid cart">
        <div class="row">
            <div class="col-sm-8 cart-product">
                <div class="cart-head">
                    <h4>SHOPPING CART</h4>
                </div>
                <div class="product-details">
                    <div class="product-img">
                        <img src="./images/cover-photo/cover1.png" alt="">
                    </div>
                    <div class="product-detail">
                        <p>Lorem ipsum</p>
                        <h5>₹350</h5>
                        <span>Size: <span>L</span></span><br>
                        <span>Color: <span>Blue</span></span><br>
                    </div>
                    <div class="product-quantity">
                        <input type="number" min="1" step="1" value="1" disabled id="count" onchange="calc(this)">
                    </div>
                    <div class="product-total-price">
                        <h5 id="price">₹350</h5>
                        <input type="hidden" id="p_price" value="350">
                    </div>
                    <div class="product-delete">
                        <i class="fa-solid fa-trash"></i>
                    </div>
                </div>
                <div class="product-details">
                    <div class="product-img">
                        <img src="./images/cover-photo/cover1.png" alt="">
                    </div>
                    <div class="product-detail">
                        <p>Lorem ipsum</p>
                        <h5>₹350</h5>
                        <span>Size: <span>L</span></span><br>
                        <span>Color: <span>Blue</span></span><br>
                    </div>
                    
                    <div class="product-quantity">
                        <input  type="number" min="1" step="1" value="1" disabled id="count" name="count" onchange="calc(this)">
                    </div>
                    <div class="product-total-price">
                        <h5 id="price">₹350</h5>
                        <input type="hidden" id="p_price" name="p_price" value="350" onchange="calc(this)">
                    </div>
                   
                    <div class="product-delete">
                        <i class="fa-solid fa-trash"></i>
                    </div>
                </div>

            </div>


            <div class="col-sm-3 cart-right">
                <div class="product-item-price">
                    <div class="item">
                        <div class="item-num">
                            <p>1 Item</p>
                        </div>
                        <div class="item-price">
                            <h5 id="total_price">₹350</h5>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-num">
                            <p>shipping</p>
                        </div>
                        <div class="item-price">
                            <h5>₹350</h5>
                        </div>
                    </div>
                </div>
                <div class="product-item-price">
                    <div class="item">
                        <div class="item-num">
                            <p>1 Item</p>
                        </div>
                        <div class="item-price">
                            <h5>₹350</h5>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-num">
                            <p>shipping</p>
                        </div>
                        <div class="item-price">
                            <h5>₹350</h5>
                        </div>
                    </div>
                </div>
                <div class="shopping-btn">
                    <button class="button">
                        Proceed to checkout
                    </button>
                </div>
            </div>
           
        </div>
        <div class="cart-bottom">
            <div class="shopping">
            <a href="shop.php">
                <i class="fa-solid fa-angle-down shopping-arow"></i>
                <p>Continue shopping</p>
            </a>
            </div>
            <!-- <div class="cart-txt">
                <p>The order will only be confirmed when you click on the button 'Order with an obligation to pay' at
                    the end of the checkout!</p>
            </div> -->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('input[type="number"]').each(function () {
                $(this).wrap('<div class="quantity"></div>');
            });
            const arrow_up = '<svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 5L5 1L9 5" stroke="#333333" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                arrow_down = '<svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 1L5 5L1 1" stroke="#333333" stroke-linecap="round" stroke-linejoin="round"/></svg>';

            $('<div class="quantity-nav"><button class="quantity-button quantity-up">' + arrow_up + '</button><button class="quantity-button quantity-down">' + arrow_down + '</button></div>').insertAfter('.quantity input');

            $('.quantity').each(function () {
                const spinner = $(this),
                    input = spinner.find('input[type="number"]'),
                    btnUp = spinner.find('.quantity-up'),
                    btnDown = spinner.find('.quantity-down'),
                    min = input.attr('min') ? parseFloat(input.attr('min')) : -Infinity,
                    max = input.attr('max') ? parseFloat(input.attr('max')) : Infinity,
                    step = input.attr('step') ? parseFloat(input.attr('step')) : 1;

                btnUp.click(function () {
                    const oldValue = input.val() ? parseFloat(input.val()) : 0;
                    let newVal;
                    if (oldValue >= max) {
                        newVal = oldValue;
                    
                    } else {
                        newVal = oldValue + step;
                    }
                    spinner.find("input").val(newVal);
                    spinner.find("input").trigger("change");
                });

                btnDown.click(function () {
                    const oldValue = input.val() ? parseFloat(input.val()) : 0;
                    let newVal;
                    if (oldValue <= min) {
                        newVal = oldValue;
                    } else {
                        newVal = oldValue - step;
                    }
                    spinner.find("input").val(newVal);
                    spinner.find("input").trigger("change");
                });

            });
            
            // $("#count").change(function(){
            //     var count = document.getElementById("count").value;
            //     var price=document.getElementById("p_price").value;
            //     var count_price = price * count;
            //     document.getElementById("price").innerHTML = "₹"+count_price; 
            // })
            

        });
        var total = document.getElementById("total_price");
        var p = document.getElementById("price");
        
        function calc(v){
                // var index = $(v).parent().parent().parent().index();
               console.log(p.length);
                var count = v.parentElement.children[0].value;
                if(count < 0)
                {
                    window.location.href = "index.php";
                }

                var price = v.parentElement.parentElement.parentElement.children[3].children[1].value
                var count_price = price * count;
                var cprice = v.parentElement.parentElement.parentElement.children[3].children[0]
                cprice.innerHTML = "₹"+count_price;
                
                
               
            }
        
    </script>

</body>

</html>