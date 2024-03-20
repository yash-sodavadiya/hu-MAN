<?php
    $category = "";
    if(isset($_GET['catagory']))
    {

    
    $category = $_GET['catagory'];
    }
    if($category == 'shirt_tbl')
    {
        $sql1 = "SELECT * FROM `shirt_tbl`";
    }
    if($category == 'pent_tbl')
    {
        $sql1 = "SELECT * FROM `pent_tbl`";
    }
    if($category == 'perfume_tbl')
    {
        $sql1 = "SELECT * FROM `perfume_tbl`";
    }
    if($category == 'shoes_tbl')
    {
        $sql1 = "SELECT * FROM `shoes_tbl`";
    }
   
?>