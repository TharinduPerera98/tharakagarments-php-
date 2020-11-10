<?php

include_once './connection.php';

session_start();

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $database = $_GET['database'];
    $imagetable =  $database. "_image";
    $sql = "DELETE FROM `$database` WHERE item_number = '$id'";
    $sql1 = "SELECT * FROM `$imagetable` WHERE item_number = '$id'";
    $result1 = mysqli_query($conn, $sql1);
    while ($row = $result1->fetch_assoc()) {
        $image = $row['Image_path'];
        unlink("$image");
    }
    mysqli_query($conn, $sql);
    mysqli_query($conn, $sql2);
    switch ($database) {
        case 'boys_wear':
            header("Location: ./../Forms/boys_wear");
            break;
        case 'gents_wear':
            header("Location: ./../Forms/gents_wear");
            break;
        case 'girls_wear':
            header("Location: ./../Forms/girls_wear");
            break;
        case 'kids_wear':
            header("Location: ./../Forms/kids_wear");
            break;
        case 'ladies_wear':
            header("Location: ./../Forms/ladies_wear");
            break;
        case 'others':
            header("Location: ./../Forms/others");
            break;
    }
    
    
}
if (isset($_POST['edit'])) {
    $database = $_GET['database'];
    $Item_Number = mysqli_real_escape_string($conn, $_REQUEST['Item_Number']);
    $Quantity = mysqli_real_escape_string($conn, $_REQUEST['Quantity']);
    $Description = mysqli_real_escape_string($conn, $_REQUEST['Description']);
    $ProductionStatus = mysqli_real_escape_string($conn, $_REQUEST['ProductionStatus']);
    $sql = "UPDATE `$database` SET `Quantity`='$Quantity',`Description`='$Description',`production_status`='$ProductionStatus' WHERE `item_number`='$Item_Number'";
    mysqli_query($conn, $sql);
    switch ($database) {
        case 'boys_wear':
            header("Location: ./../Forms/boys_wear");
            break;
        case 'gents_wear':
            header("Location: ./../Forms/gents_wear");
            break;
        case 'girls_wear':
            header("Location: ./../Forms/girls_wear");
            break;
        case 'kids_wear':
            header("Location: ./../Forms/kids_wear");
            break;
        case 'ladies_wear':
            header("Location: ./../Forms/ladies_wear");
            break;
        case 'others':
            header("Location: ./../Forms/others");
            break;
    }
}
	