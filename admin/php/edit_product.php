<?php 
   require('../database/config.php');
   if (isset($_POST['edit_product'] ) && isset($_FILES['p_image']) ) {
       $p_img = $_FILES['p_image']['name'];
       $p_img_tmp = $_FILES['p_image']['tmp_name'];
       move_uploaded_file($p_img_tmp,"../assets/img/product/". $p_img);

       $p_id = $_POST['p_id'];
       $p_name = $_POST['p_name'];
       $p_category = $_POST['p_catagory'];
       $p_mrp = $_POST['p_mrp'];
       $p_final_price = $_POST['p_final_price'];
       $p_stock = $_POST['p_stock'];

       $short_description = $_POST['short_description'];
       $long_description = $_POST['long_description'];
       
       
       if($p_category == "shirt")
       {
        $c_pattern = $_POST['c_pattern'];
        $s_material_type = $_POST['s_material_type'];
        $c_sleeve_type = $_POST['c_sleeve_type'];
        $c_length = $_POST['c_length'];
        $sql = "UPDATE `shirt_tbl` SET `p_image` = '$p_img', `p_name` = '$p_name', `p_mrp` = '$p_mrp', `p_final_price` = '$p_final_price', `p_stock` = '$p_stock', `c_pattern` = ' $c_pattern', `s_material_type` = '$s_material_type', `c_sleeve_type` = '$c_sleeve_type', `c_length` = '$c_length', `p_description1` = '$long_description', `p_description2` = '$short_description' WHERE `shirt_tbl`.`p_id` ='$p_id' ";
        $result = mysqli_query($conn, $sql);
        if ($result) {
           header("location:product-list");
            
        }
    }else if($p_category == "pent"){
        $p_material_type = $_POST['p_material_type'];
        $p_length = $_POST['p_length'];
        $p_style = $_POST['p_style'];
        $p_closure_type = $_POST['p_closure_type'];
        $sql = "UPDATE `pent_tbl` SET `p_image` = '$p_img', `p_name` = '$p_name', `p_mrp` = '$p_mrp', `p_final_price` = '$p_final_price', `p_stock` = '$p_stock', `p_material_type` = '$p_material_type', `p_length` = '$p_length', `p_style` = '$p_style', `p_closure_type` = '$p_closure_type', `p_description1` = '$long_description', `p_description2` = '$short_description' WHERE `pent_tbl`.`p_id` = '$p_id' ";
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            echo "<script> alert('Product Inserted') </script>";
            header("location:../product-list");
    }
    

   
}
else if($p_category == "shoes"){
    $s_material_type = $_POST['s_material_type'];
    $s_closure_type = $_POST['s_closure_type'];
    $s_heel_type = $_POST['s_heel_type'];
    $s_w_r_l = $_POST['s_w_r_l'];
    $s_sole_material = $_POST['s_sole_material'];
    $s_style = $_POST['s_style'];
    $sql = "UPDATE `shoes_tbl` SET `p_image` = '$p_img', `p_name` = '$p_name', `p_mrp` = '$p_mrp', `p_final_price` = '$p_final_price', `p_stock` = '$p_stock', `s_material_type` = '$s_material_type', `s_closure_type` = '$s_closure_type', `s_heel_type` = '$s_heel_type', `s_w_r_l` = '$s_w_r_l', `s_sole_material` = '$s_sole_material', `s_style` = '$s_style', `p_description1` = '$long_description', `p_description2` = '$short_description' WHERE `shoes_tbl`.`p_id` = '$p_id' ";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        echo "<script> alert('Product Inserted') </script>";
        header("location:../product-list");
}
}
      
   }
?>