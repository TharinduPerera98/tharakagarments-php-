<?php

session_start();

include_once './connection.php';

$ItemNumber = mysqli_real_escape_string($conn, $_REQUEST["ItemNumber"]);
$ItemName = mysqli_real_escape_string($conn, $_REQUEST["ItemName"]);
$FabricType = mysqli_real_escape_string($conn, $_REQUEST["FabricType"]);
$Item_type = mysqli_real_escape_string($conn, $_REQUEST["Item_type"]);
$Description = mysqli_real_escape_string($conn, $_REQUEST["Description"]);
$Quantity = mysqli_real_escape_string($conn, $_REQUEST["Quantity"]);
$ProductionStatus = mysqli_real_escape_string($conn, $_REQUEST["ProductionStatus"]);
$targetDir = "Upload/";
$allowTypes = array('jpg', 'png', 'jpeg', 'gif');
$fileNames = array_filter($_FILES["UploadFile"]["name"]);
$date = date('Y-m-d');


$sqlx = "INSERT INTO `$Item_type`(`item_name`, `Fabric_Type`, `Quantity`, `Description`, `production_status`, `item_number`, `Date`) VALUES ('$ItemName' ,'$FabricType','$Quantity','$Description','$ProductionStatus','$ItemNumber','$date')";

$imagetable =  $Item_type . "_image";
echo $imagetable;

$sql = "SELECT * FROM `boys_wear` WHERE item_number='$ItemNumber'";
$sql1 = "SELECT * FROM `gents_wear` WHERE item_number='$ItemNumber'";
$sql2 = "SELECT * FROM `girls_wear` WHERE item_number='$ItemNumber'";
$sql3 = "SELECT * FROM `kids_wear` WHERE item_number='$ItemNumber'";
$sql4 = "SELECT * FROM `ladies_wear` WHERE item_number='$ItemNumber'";
$sql5 = "SELECT * FROM `others` WHERE item_number='$ItemNumber'";

$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);
$result4 = mysqli_query($conn, $sql4);
$result5 = mysqli_query($conn, $sql5);


$resultCheck = mysqli_num_rows($result);
$resultCheck1 = mysqli_num_rows($result1);
$resultCheck2 = mysqli_num_rows($result2);
$resultCheck3 = mysqli_num_rows($result3);
$resultCheck4 = mysqli_num_rows($result4);
$resultCheck5 = mysqli_num_rows($result5);



if ($resultCheck < 1 && $resultCheck1 < 1 && $resultCheck2 < 1 && $resultCheck3 < 1 && $resultCheck4 < 1 && $resultCheck5 < 1) {

    $sql1 = "SELECT * FROM `$imagetable` WHERE item_number = '$ItemNumber'";
    $sql2 = "DELETE FROM `$Item_type` WHERE item_number = '$ItemNumber'";
    mysqli_query($conn, $sqlx);
    foreach ($_FILES["UploadFile"]["name"] as $key => $val) {
        // File upload path 
        $fileName = basename($_FILES["UploadFile"]["name"][$key]);
        $targetFilePath = $targetDir . $fileName;

        // Check whether file type is valid 
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        if (in_array($fileType, $allowTypes)) {
            // Upload file to server 
            if (move_uploaded_file($_FILES["UploadFile"]["tmp_name"][$key], $targetFilePath)) {
                // Image db insert sql 
                $sqly = "INSERT INTO `$imagetable`(`item_number`, `Image_path`) VALUES ('$ItemNumber','Upload/$fileName')";
                mysqli_query($conn, $sqly);
                echo $sqly;
            } else {
                mysqli_query($conn, $sql);
                $result1 = mysqli_query($conn, $sql1);
                while ($row = $result1->fetch_assoc()) {
                    $image = $row['Image_path'];
                    unlink("$image");
                }
                mysqli_query($conn, $sql2);
                header("Location: ./../Forms/Registration?Upload=Unsuccessfull");
                $_SESSION['Upload'] = 'imageerror';
                $_SESSION['ItemNumber'] = $ItemNumber;
                $_SESSION['ItemName'] = $ItemName;
                $_SESSION['FabricType'] = $FabricType;
                $_SESSION['Item_type'] = $Item_type;
                $_SESSION['Description'] = $Description;
                $_SESSION['Quantity'] = $Quantity;
                $_SESSION['ProductionStatus'] = $ProductionStatus;
                exit();
            }
        } else {
            mysqli_query($conn, $sql);
                $result1 = mysqli_query($conn, $sql1);
                while ($row = $result1->fetch_assoc()) {
                    $image = $row['Image_path'];
                    unlink("$image");
                }
            mysqli_query($conn, $sql2);
            header("Location: ./../Forms/Registration?Upload=Unsuccessfull");
            $_SESSION['Upload'] = 'imageerror';
            $_SESSION['ItemNumber'] = $ItemNumber;
            $_SESSION['ItemName'] = $ItemName;
            $_SESSION['FabricType'] = $FabricType;
            $_SESSION['Item_type'] = $Item_type;
            $_SESSION['Description'] = $Description;
            $_SESSION['Quantity'] = $Quantity;
            $_SESSION['ProductionStatus'] = $ProductionStatus;
            exit();
        }
    }
    header("Location: ./../Forms/Registration?Upload=successfull");
    $_SESSION['Successfull'] = 'Successfull';
} else {
    header("Location: ./../Forms/Registration?Upload=Unsuccessfull");
    $_SESSION['Upload'] = 'Unsuccessfull';
    $_SESSION['ItemNumber'] = $ItemNumber;
    $_SESSION['ItemName'] = $ItemName;
    $_SESSION['FabricType'] = $FabricType;
    $_SESSION['Item_type'] = $Item_type;
    $_SESSION['Description'] = $Description;
    $_SESSION['Quantity'] = $Quantity;
    $_SESSION['ProductionStatus'] = $ProductionStatus;
    exit();
}

