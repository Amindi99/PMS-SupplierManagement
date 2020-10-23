<?php

// get database connection
include("../dbconfig.php");

// Store form data in variables
$ORDERID =$_GET['ordid'];

 $sql ="DELETE FROM `order_item` WHERE `order_id`=$ORDERID";
if ($conn->query($sql) === TRUE) {
    header("location:../View_Orders.php?delete=yes");
} else {
    header("location:../View_Orders.php?delete=no");
}

 
$conn->close();
?>