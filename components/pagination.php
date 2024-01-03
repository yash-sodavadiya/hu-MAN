  <!-- pagination  -->
  <div class="container">
            <ul class="pagination">
          <li><a href="#">Previous</a></li>
          <li class="<?php if( basename($_SERVER['PHP_SELF']) == 'shop.php') { echo 'active'; } else{echo '';}  ?>"><a href="shop.php" class="<?php if( basename($_SERVER['PHP_SELF']) == 'shop.php') { echo 'active'; } else{echo '';}  ?>">1</a></li>
          <li class="<?php if( basename($_SERVER['PHP_SELF']) == 'shop2.php') { echo 'active'; } else{echo '';}  ?>"><a href="shop2.php" class="<?php if( basename($_SERVER['PHP_SELF']) == 'shop2.php') { echo 'active'; } else{echo '';}  ?>">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">6</a></li>
          <li><a href="#">7</a></li>
          <li><a href="#">8</a></li>
          <li><a href="#">Next</a></li>
        </ul>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
      <script>
        $("li").click(function () {
  $(this).addClass("active").siblings().removeClass("active");
});
      </script>