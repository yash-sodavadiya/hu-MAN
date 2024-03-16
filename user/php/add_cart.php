<?php 
    require("../database/config.php");
    if(isset($_POST['add_cart']))
    {
        $p_id = $_POST['p_id'];
        $quantity = $_POST['quantity'];
        $sub_total = $_POST['sub_total'];

        $sql = "INSERT INTO `cart_tbl` (`p_id`, `user_id`, `quantity`, `sub_total`) VALUES ('$p_id', '1', '$quantity', '$sub_total')";
        $result = mysqli_query($conn,$sql);
        if($result)
        {
            $sql1 = "SELECT SUM(sub_total) AS total_sum FROM `cart_tbl` WHERE user_id = 1";
            $result1 = mysqli_query($conn,$sql1);
            foreach($result1 as $row1)
            {
                $total_sum = $row1['total_sum'];
                $findid = "SELECT * FROM `cart_total_tbl`";
                $result3 = mysqli_query($conn,$findid);
                foreach($result3 as $row3)
                {
                    $u_id = $row3['u_id'];
                    
                }
                if($u_id != 1)
                    {
                        $insertCartTotal = "INSERT INTO `cart_total_tbl` (`u_id`, `sub_total`, `final_total`) VALUES ('1', '$total_sum', '2')";
                        $result2 = mysqli_query($conn,$insertCartTotal);
                        if($result2){
                            header("location:../index");
                        }
                    }
                    else{
                        $updateCartTotal = "UPDATE `cart_total_tbl` SET sub_total = '$total_sum' where u_id = 1 ";
                        $result2 = mysqli_query($conn,$updateCartTotal);
                        if($result2){
                            header("location:../index");
                        }
                    }
               
            }
            
           
            
           
        }
    }
?>