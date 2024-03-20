<?php 
            if(isset($_SESSION['user_id']))
            { 
                $user_id = $_SESSION['user_id'];
                $sql = "SELECT * FROM `user_tbl` WHERE `user_id` = '$user_id' ";
                $result = mysqli_query($conn,$sql);
                foreach($result as $row)
                { ?>
                    <div class="ec-right-bottom">
        <a class="ec-list" data-number="919824873685"
                            data-message="Please help me! My name is <?php echo $row['f_name']; ?> " >
            <div class="ec-box">
                <div class="">
                    <img class="" src="assets/images/common/whatsapp.png" alt="whatsapp icon" style="padding:4px;"/>
                </div>
            </div>
        </a>
        </div>

        
        
        
        <?php  }
    }
        ?>