<?php

session_start();

include_once './connection.php';
$id = $_GET['ID'];
$ContactNumber = $_REQUEST["ContactNumber"];
$Password = $_REQUEST["Password"];
$ConfirmPassword = $_REQUEST["ConfirmPassword"];



$sqlx = "UPDATE `customer_details` SET `ContactNumber`= '$ContactNumber', `Password`='$Password' WHERE customer_details.NIC ='$id'";

if ($Password == $ConfirmPassword) {

    mysqli_query($conn, $sqlx);
    header("Location: ./../Forms/EditDetails");
    $_SESSION['Successfull'] = 'Successfull';
    echo $sqlx;
    echo $id;
    echo $ContactNumber;
    echo $Password;
    exit();
} else {
    header("Location: ./../Forms/EditDetails?Upload=Perror");
    $_SESSION['Upload'] = 'Perror';
    echo $sqlx;
    echo $id;
    echo $ContactNumber;
    echo $Password;
    exit();
}

