<?php

// get database connection
include("../dbconfig.php");

// Store form data in variables
$cpmnyID =$_GET['cmpid'];

 $sql ="DELETE FROM `supplier` WHERE `company_id`=$cpmnyID";
if ($conn->query($sql) === TRUE) {
    header("location:../View_Supplier.php?delete=yes");
} else {
    header("location:../View_Supplier.php?delete=no");
}





 
$conn->close();
?>