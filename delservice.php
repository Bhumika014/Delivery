<?php

include('config.php');{
if(isset($_GET['id']))
$id = $_GET['id'];
	
	$sql = mysqli_query($conn, "DELETE FROM `regi` WHERE id=$id");
	

echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Record  Delete Successfully!!')
                    window.location.href='customer.php';
                    </SCRIPT>");
}
?>