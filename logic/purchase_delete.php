<?php

// get database connection
include("../dbconfig.php");

// Store form data in variables
$purchaseID =$_GET['purchaseid'];

 $sql ="DELETE FROM `add_purchase` WHERE `purchased_id`=$purchaseID";
if ($conn->query($sql) === TRUE) {
    header("location:../View_purchase.php?delete=yes");
} else {
    header("location:../View_purchase.php?delete=no");
}





 
$conn->close();
?>