<!DOCTYPE html>
<html>
<head>
    <title>Calculate Price Dynamically</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        
        .card {
  --main-color: #000;
  --bg-color: #fff;
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  position: relative;
  padding: 20px;
  width: 320px;
  background: var(--bg-color);
  border-radius: 20px;
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.card__back svg, .card__menu svg {
  width: 20px;
  height: 20px;
}

.card__wrapper {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
}

.card__img {
  width: 170px;
  height: 170px;
  background: linear-gradient(90deg, #FFF8F7, #F0F7DF);
  border-radius: 100%;
  margin-inline: auto;
}

.card__img svg {
  height: 150px;
  transform: rotate(-45deg) translate(15px, 0px);
}

.card__title {
  font-weight: 600;
  font-size: 25px;
  color: var(--main-color);
}

.card__subtitle {
  font-weight: 400;
  font-size: 15px;
  color: var(--main-color);
  letter-spacing: 0.5px;
}

.card__price {
  font-weight: 600;
  font-size: 22px;
  color: var(--main-color);
}

.card__counter {
  display: flex;
  flex-direction: row;
  align-items: center;
  gap: 15px;
  padding: 5px;
  background: #F7F7F7;
  border-radius: 50px;
}

.card__counter-score, .card__btn {
  font-weight: 700;
  font-size: 22px;
  color: var(--main-color);
}

.card__btn {
  width: 30px;
  height: 30px;
  border-radius: 100%;
  border: none;
  background: transparent;
}

.card__btn-plus {
  background: var(--bg-color);
}



/* code span  

*/
span {cursor:pointer; }
		.number{
			margin:100px;
		}
		.minus, .plus{
			width:20px;
			height:20px;
			background:#f2f2f2;
			border-radius:4px;
			padding:8px 5px 8px 5px;
			border:1px solid #ddd;
      display: inline-block;
      vertical-align: middle;
      text-align: center;
		}
		input{
			height:34px;
      width: 100px;
      text-align: center;
      font-size: 26px;
			border:1px solid #ddd;
			border-radius:4px;
      display: inline-block;
      vertical-align: middle;
        }
    </style>
</head>
<body>

 <!-- cart content Start -->
 <div class="ec-cart-content">
                        <div class="ec-cart-inner">
                            <div class="row">
                                <form action="#">
                                    <div class="table-content cart-table-content">
                                        <table>
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
                                              
                                                <tr>
                                                    <td data-label="Product" class="ec-cart-pro-name"><a
                                                            href="product-left-sidebar.html"><img
                                                                class="ec-cart-pro-img mr-4"
                                                                src="assets/images/product-image/2.jpg" alt="" />Unisex
                                                            Fully Solid Hoodie</a></td>
                                                    <td data-label="Price" class="ec-cart-pro-price"><span
                                                            class="amount">$75.00</span></td>
                                                    <td data-label="Quantity" class="ec-cart-pro-qty"
                                                        style="text-align: center;">
                                                        <div class="product-quantity cart-qty-plus-minus">
                                                        <div class="number">
	<span class="minus">-</span>
	<input type="text" value="1"  class="cart-plus-minus" type="text"
                                                                name="cartqtybutton"/>
	<span class="plus">+</span>
</div>
                            </div>
                                                    </td>
                                                    <td data-label="Total" class="ec-cart-pro-subtotal">$75.00</td>
                                                    <td data-label="Remove" class="ec-cart-pro-remove">
                                                        <a href="#"><i class="ecicon eci-trash-o"></i></a>
                                                    </td>
                                                </tr>
                                                
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="ec-cart-update-bottom">
                                                <a href="#">Continue Shopping</a>
                                                <button class="btn btn-primary">Check Out</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="ec-cart-rightside col-lg-4 col-md-12">
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Summary Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title">Summary</h3>
                            </div>
                            <div class="ec-sb-block-content">
                                <h4 class="ec-ship-title">Estimate Shipping</h4>
                                <div class="ec-cart-form">
                                    <p>Enter your destination to get a shipping estimate</p>
                                    <form action="#" method="post">
                                        <span class="ec-cart-wrap">
                                            <label>Country *</label>
                                            <span class="ec-cart-select-inner">
                                                <select name="ec_cart_country" id="ec-cart-select-country"
                                                    class="ec-cart-select">
                                                    <option selected="" disabled="">United States</option>
                                                    <option value="1">Country 1</option>
                                                    <option value="2">Country 2</option>
                                                    <option value="3">Country 3</option>
                                                    <option value="4">Country 4</option>
                                                    <option value="5">Country 5</option>
                                                </select>
                                            </span>
                                        </span>
                                        <span class="ec-cart-wrap">
                                            <label>State/Province</label>
                                            <span class="ec-cart-select-inner">
                                                <select name="ec_cart_state" id="ec-cart-select-state"
                                                    class="ec-cart-select">
                                                    <option selected="" disabled="">Please Select a region, state
                                                    </option>
                                                    <option value="1">Region/State 1</option>
                                                    <option value="2">Region/State 2</option>
                                                    <option value="3">Region/State 3</option>
                                                    <option value="4">Region/State 4</option>
                                                    <option value="5">Region/State 5</option>
                                                </select>
                                            </span>
                                        </span>
                                        <span class="ec-cart-wrap">
                                            <label>Zip/Postal Code</label>
                                            <input type="text" name="postalcode" placeholder="Zip/Postal Code">
                                        </span>
                                    </form>
                                </div>
                            </div>

                            <div class="ec-sb-block-content">
                                <div class="ec-cart-summary-bottom">
                                    <div class="ec-cart-summary">
                                        <div>
                                            <span class="text-left">Sub-Total</span>
                                            <span class="text-right">$80.00</span>
                                        </div>
                                        <div>
                                            <span class="text-left">Delivery Charges</span>
                                            <span class="text-right">$80.00</span>
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
                                            <span class="text-left">Total Amount</span>
                                            <span class="text-right">$80.00</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                           <!-- Vendor JS -->
    <!-- <script src="assets/js/vendor/jquery-3.5.1.min.js"></script> -->
 
  
    <script>
$(document).ready(function(){
    $('.minus').click(function () {
        var $input = $(this).siblings('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        updateTotal($(this));
        return false;
    });
    
    $('.plus').click(function () {
        var $input = $(this).siblings('input');
        $input.val(parseInt($input.val()) + 1);
        updateTotal($(this));
        return false;
    });

    $('.cart-plus-minus').on('input', function() {
        updateTotal($(this));
    });

    function updateTotal(input) {
        var quantity = parseInt(input.closest('td').find('input').val());
        var price = parseFloat(input.closest('tr').find('.ec-cart-pro-price .amount').text().replace('$', ''));
        var total = price * quantity;
        input.closest('tr').find('.ec-cart-pro-subtotal').text('$' + total.toFixed(2));
    }
});

</script>




</body>
</html>
