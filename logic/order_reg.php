<?php

// get database connection
include("../dbconfig.php");

// Store form data in variables
		
       
        $CompanyId  = $_POST["company_id"];
        $Email = $_POST["email"];
		$ItemName = $_POST["item_name"];
		$ItemId = $_POST["item_id"];
        $Quantity = $_POST["quantity"];
        $Date = $_POST["date"];
        $OrderId= $_POST["isUpdate"];

        

if (!isset($_REQUEST["isUpdate"])) {
	
$sql = "INSERT INTO `order_item` (`company_id`, `email`, `item_name`, `item_id`, `quantity`,`date`) VALUES  ('".$CompanyId."', '".$Email."', '".$ItemName."', '".$ItemId."', '".$Quantity."', '".$Date."')";



if ($conn->query($sql) === TRUE) {
    header("location:../View_Orders.php?sucess=yes");
} else {
header("location:../View_Orders.php?sucess=no"). $conn->error;
}

} else {

    $sql = "UPDATE `order_item` SET `company_id` = '".$CompanyId."', `email` = '".$Email."', `item_name` = '".$ItemName."', `item_id` = '".$ItemId."', `quantity` = '".$Quantity."', `date` = '".$Date."' WHERE  `order_item`.`order_id` = '".$_POST['isUpdate']."'";
    
    
    
    if ($conn->query($sql) === TRUE) {
        header("location:../View_Orders.php?update=yes");
    } else {
    header("location:../View_Orders.php?update=no"). $conn->error;
    }
    
    }
    
    
    
    $conn->close();
    ?>
