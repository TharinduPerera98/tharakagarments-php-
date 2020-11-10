<?php

session_start();

include_once './connection.php';

$FirstName = mysqli_real_escape_string($conn, $_REQUEST["FirstName"]);
$LastName = mysqli_real_escape_string($conn, $_REQUEST["LastName"]);
$Email = mysqli_real_escape_string($conn, $_REQUEST["Email"]);
$NIC = mysqli_real_escape_string($conn, $_REQUEST["NIC"]);
$ContactNumber = mysqli_real_escape_string($conn, $_REQUEST["ContactNumber"]);
$Password = mysqli_real_escape_string($conn, $_REQUEST["Password"]);
$ConfirmPassword = mysqli_real_escape_string($conn, $_REQUEST["ConfirmPassword"]);
$upload_location = "Upload/";
$upload_file = $upload_location . basename($_FILES["UploadFile"]["name"]);


$sqlx = "INSERT INTO `customer_details`(`FirstName`, `LastName`, `Email`, `NIC`, `ContactNumber`, `ProfilePicture`, `Password`, `User_Type`) VALUES ('$FirstName','$LastName','$Email','$NIC','$ContactNumber','$upload_file' ,'$Password','User')";

$sql = "SELECT * FROM `customer_details` WHERE Email='$Email' OR NIC='$NIC'";

$result = mysqli_query($conn, $sql);


$resultCheck = mysqli_num_rows($result);

if ($Password == $ConfirmPassword) {
    if ($resultCheck < 1) {
        if (move_uploaded_file($_FILES["UploadFile"]["tmp_name"], $upload_file)) {
            mysqli_query($conn, $sqlx);
            header("Location: ./../Forms/Staff_Registration.php");
            $_SESSION['register'] = 'Successfull';
            $_SESSION['Successfull'] = 'Successfull';
            exit();
        } else {
            header("Location: ./../Forms/Staff_Registration?Upload=error");
            $_SESSION['register'] = 'Unsuccessfull';
            $_SESSION['Upload'] = 'error';
            $_SESSION['FirstName'] = $FirstName;
            $_SESSION['LastName'] = $LastName;
            $_SESSION['Email'] = $Email;
            $_SESSION['NIC'] = $NIC;
            $_SESSION['ContactNumber'] = $ContactNumber;
            exit();
        }
    } else {
        header("Location: ./../Forms/Staff_Registration?Upload=Unsuccessfull");
        $_SESSION['register'] = 'Unsuccessfull';
        $_SESSION['Upload'] = 'Unsuccessfull';
        $_SESSION['FirstName'] = $FirstName;
        $_SESSION['LastName'] = $LastName;
        $_SESSION['Email'] = $Email;
        $_SESSION['NIC'] = $NIC;
        $_SESSION['ContactNumber'] = $ContactNumber;
        exit();
    }
} else {
    header("Location: ./../Forms/Staff_Registration?Upload=Perror");
    $_SESSION['register'] = 'Unsuccessfull';
    $_SESSION['Upload'] = 'Perror';
    $_SESSION['FirstName'] = $FirstName;
    $_SESSION['LastName'] = $LastName;
    $_SESSION['Email'] = $Email;
    $_SESSION['NIC'] = $NIC;
    $_SESSION['ContactNumber'] = $ContactNumber;
    exit();
}


