<?php

// get database connection
include("../dbconfig.php");

// Store form data in variables
		
        $itemId = $_POST["item_id"];
        $itemName = $_POST["item_name"];
        $Quantity = $_POST["quantity"];
        $companyId = $_POST["company_id"];
        $orderedDate = $_POST["ordered_date"];
        $receivedDate = $_POST["received_date"];
        $purchasedId = $_POST["isUpdate"];

        if (!isset($_REQUEST["isUpdate"])) {
	
            $sql = "INSERT INTO `add_purchase` (`item_id`, `item_name`, `quantity`,`company_id`, `ordered_date`, `received_date`) VALUES  ('".$itemId."', '".$itemName."', '".$Quantity."','".$companyId."','".$orderedDate."', '".$receivedDate."')";
            
            
            
            if ($conn->query($sql) === TRUE) {
                header("location:../Add_Purchase.php?sucess=yes");
            } else {
            header("location:../Add_Purchase.php?sucess=no"). $conn->error;
            }
            
        } else {

            $sql = "UPDATE `add_purchase` SET  `item_id` = '".$itemId."', 'item_name' = '".$itemName."' , `quantity` = '".$Quantity."', `company_id` = '".$companyId."', `ordered_date` = '".$orderedDate."', `received_date` = '".$receivedDate."' WHERE  `add_purchase`.`purchased_id` = '".$_POST['isUpdate']."'";
            
            
            
            if ($conn->query($sql) === TRUE) {
                header("location:../Add_Purchase.php?update=yes");
            } else {
            header("location:../Add_Purchase.php?update=no"). $conn->error;
            }
            
            }
            
        
            
            $conn->close();
            ?>