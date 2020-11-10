<?php

include_once './connection.php';

session_start();

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM `customer_details` WHERE NIC = '$id'";
    mysqli_query($conn, $sql);
    header("Location: ./../Forms/staff_access");
}
if (isset($_POST['edit'])) {
    $NIC = $_REQUEST['NIC'];
    $ContactNumber = $_REQUEST['ContactNumber'];
    $AccessStatus = $_REQUEST['AccessStatus'];
    $sql = "UPDATE `customer_details` SET `User_Type`='$AccessStatus',`ContactNumber`='$ContactNumber' WHERE `NIC`='$NIC'";
    mysqli_query($conn, $sql);
    header("Location: ./../Forms/staff_access");
}

