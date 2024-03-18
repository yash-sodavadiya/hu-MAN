<?php 
   require('../database/config.php');
   session_start();
   $success_message = "";
   if (isset($_POST['edit_product'] ) ) {
    

       $p_id = $_POST['p_id'];
       $p_name = $_POST['p_name'];
       $p_category = $_POST['categories'];
       $p_mrp = $_POST['p_mrp'];
       $p_final_price = $_POST['p_final_price'];
       $p_stock = $_POST['p_stock'];

       $short_description = $_POST['short_description'];
       $long_description = $_POST['long_description'];

       if(isset($_FILES['p_image']) && $_FILES['p_image']['size'] > 0) {
        $p_img = $_FILES['p_image']['name'];
        $p_img_tmp = $_FILES['p_image']['tmp_name'];
        move_uploaded_file($p_img_tmp, "../assets/img/product/" . $p_img);
    } else {
        // If no new image is uploaded, retain the previous image
        $sql_select_img = "SELECT p_image FROM shirt_tbl WHERE p_id=?";
        $stmt_select_img = $conn->prepare($sql_select_img);
        $stmt_select_img->bind_param("i", $p_id);
        $stmt_select_img->execute();
        $stmt_select_img->bind_result($p_img);
        $stmt_select_img->fetch();
        $stmt_select_img->close();
    }

    // for multiple images 
    if(isset($_FILES['t_img1']) && $_FILES['t_img1']['size'] > 0) {
        $t_img1 = $_FILES['t_img1']['name'];
        $t_img1_tmp = $_FILES['t_img1']['tmp_name'];
        move_uploaded_file($t_img1_tmp, "../assets/img/product/" . $t_img1);
    } else {
        // If no new image is uploaded, retain the previous image
        $sql_select_img = "SELECT p_img1 FROM shirt_tbl WHERE p_id=?";
        $stmt_select_img = $conn->prepare($sql_select_img);
        $stmt_select_img->bind_param("i", $p_id);
        $stmt_select_img->execute();
        $stmt_select_img->bind_result($t_img1);
        $stmt_select_img->fetch();
        $stmt_select_img->close();
    }
    
    if(isset($_FILES['t_img2']) && $_FILES['t_img2']['size'] > 0) {
        $t_img2 = $_FILES['t_img2']['name'];
        $t_img2_tmp = $_FILES['t_img2']['tmp_name'];
        move_uploaded_file($t_img2_tmp, "../assets/img/product/" . $t_img2);
    } else {
        // If no new image is uploaded, retain the previous image
        $sql_select_img = "SELECT p_img2 FROM shirt_tbl WHERE p_id=?";
        $stmt_select_img = $conn->prepare($sql_select_img);
        $stmt_select_img->bind_param("i", $p_id);
        $stmt_select_img->execute();
        $stmt_select_img->bind_result($t_img2);
        $stmt_select_img->fetch();
        $stmt_select_img->close();
    }
    if(isset($_FILES['t_img3']) && $_FILES['t_img3']['size'] > 0) {
        $t_img3 = $_FILES['t_img3']['name'];
        $t_img3_tmp = $_FILES['t_img3']['tmp_name'];
        move_uploaded_file($t_img3_tmp, "../assets/img/product/" . $t_img3);
    } else {
        // If no new image is uploaded, retain the previous image
        $sql_select_img = "SELECT p_img3 FROM shirt_tbl WHERE p_id=?";
        $stmt_select_img = $conn->prepare($sql_select_img);
        $stmt_select_img->bind_param("i", $p_id);
        $stmt_select_img->execute();
        $stmt_select_img->bind_result($t_img3);
        $stmt_select_img->fetch();
        $stmt_select_img->close();
    }
    if(isset($_FILES['t_img4']) && $_FILES['t_img4']['size'] > 0) {
        $t_img4 = $_FILES['t_img4']['name'];
        $t_img4_tmp = $_FILES['t_img4']['tmp_name'];
        move_uploaded_file($t_img4_tmp, "../assets/img/product/" . $t_img4);
    } else {
        // If no new image is uploaded, retain the previous image
        $sql_select_img = "SELECT p_img4 FROM shirt_tbl WHERE p_id=?";
        $stmt_select_img = $conn->prepare($sql_select_img);
        $stmt_select_img->bind_param("i", $p_id);
        $stmt_select_img->execute();
        $stmt_select_img->bind_result($t_img4);
        $stmt_select_img->fetch();
        $stmt_select_img->close();
    }
       
       
       if($p_category == "shirt")
       {
        $c_pattern = $_POST['c_pattern'];
        $s_material_type = $_POST['s_material_type'];
        $c_sleeve_type = $_POST['c_sleeve_type'];
        $c_length = $_POST['c_length'];
        $sql = "UPDATE `shirt_tbl` SET `p_image` = '$p_img', `p_img1` = '$t_img1',`p_img2` = '$t_img2' ,`p_img3` = '$t_img3', `p_name` = '$p_name', `p_mrp` = '$p_mrp', `p_final_price` = '$p_final_price', `p_stock` = '$p_stock', `c_pattern` = ' $c_pattern', `s_material_type` = '$s_material_type', `c_sleeve_type` = '$c_sleeve_type', `c_length` = '$c_length', `p_description1` = '$long_description', `p_description2` = '$short_description' WHERE `shirt_tbl`.`p_id` ='$p_id' ";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $success_message = 'Product is updated successfully.';
            $_SESSION['success_message'] = $success_message;
           header("location:../product-list");
            
        }
    }else if($p_category == "pent"){
        $p_material_type = $_POST['p_material_type'];
        $p_length = $_POST['p_length'];
        $p_style = $_POST['p_style'];
        $p_closure_type = $_POST['p_closure_type'];
        $sql = "UPDATE `pent_tbl` SET `p_image` = '$p_img', `p_name` = '$p_name', `p_mrp` = '$p_mrp', `p_final_price` = '$p_final_price', `p_stock` = '$p_stock', `p_material_type` = '$p_material_type', `p_length` = '$p_length', `p_style` = '$p_style', `p_closure_type` = '$p_closure_type', `p_description1` = '$long_description', `p_description2` = '$short_description' WHERE `pent_tbl`.`p_id` = '$p_id' ";
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            $success_message = 'Product is updated successfully.';
            $_SESSION['success_message'] = $success_message;
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
        $success_message = 'Product is updated successfully.';
        $_SESSION['success_message'] = $success_message;
       header("location:../product-list");
        
    }
}
else if($p_category == "perfume"){
    $p_brand = $_POST['p_brand'];
        $p_item_form = $_POST['p_item_form'];
        $p_item_volume = $_POST['p_item_volume'];
        $p_scent = $_POST['p_scent'];
    $sql = "UPDATE `perfume_tbl` SET `p_image` = '$p_img', `p_img1` = '$t_img1',`p_img2` = '$t_img2' ,`p_img3` = '$t_img3', `p_img4` = '$t_img4', `p_name` = '$p_name', `p_mrp` = '$p_mrp', `p_final_price` = '$p_final_price', `p_stock` = '$p_stock', `p_catagory` = '$p_category', `p_brand` = '$p_brand', `p_item_form` = '$p_item_form', `p_item_volume` = '$p_item_volume', `p_scent` = '$p_scent', `p_description1` = '$p_description1', `p_description2` = '$p_description2' WHERE `p_id` = '$p_id'";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        $success_message = 'Product is updated successfully.';
        $_SESSION['success_message'] = $success_message;
       header("location:../product-list");
        
    }
}
      
   }
?>