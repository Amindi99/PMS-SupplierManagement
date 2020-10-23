<?php

// get database connection
include("../dbconfig.php");

// Store form data in variables
		
        $cmpny_name = $_POST["cmp_name"];
        $address = $_POST["address"];
        $tel_no = $_POST["tel_no"];
		$email = $_POST["email"];
		$category = $_POST["category"];
        $reg_date = $_POST["reg_date"];
        $compnyid = $_POST["isUpdate"];
        

if (!isset($_REQUEST["isUpdate"])) {
	
$sql = "INSERT INTO `supplier` (`company_name`, `address`, `tel_no`, `email`, `category`, `reg_date`) VALUES  ('".$cmpny_name."', '".$address."', '".$tel_no."', '".$email."', '".$category."', '".$reg_date."')";



if ($conn->query($sql) === TRUE) {
    header("location:../Add_Supplier.php?sucess=yes");
} else {
header("location:../Add_Supplier.php?sucess=no"). $conn->error;
}

} else {

$sql = "UPDATE `supplier` SET `company_name` = '".$cmpny_name."', `address` = '".$address."', `tel_no` = '".$tel_no."', `email` = '".$email."', `category` = '".$category."', `reg_date` = '".$reg_date."' WHERE  `supplier`.`company_id` = '".$_POST['isUpdate']."'";



if ($conn->query($sql) === TRUE) {
    header("location:../Add_Supplier.php?update=yes");
} else {
header("location:../Add_Supplier.php?update=no"). $conn->error;
}

}



$conn->close();
?>







