<?php 
	if(isset($_POST['update_submit']))
	{
		$eid = $_POST['eid'];
		header("location:../employee-list.php");
	}
?>