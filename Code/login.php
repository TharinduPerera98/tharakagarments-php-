<?php

session_start();

include_once './connection.php';

$Username = mysqli_real_escape_string($conn, $_REQUEST["Username"]);
$Password = mysqli_real_escape_string($conn, $_REQUEST["Password"]);

$sql = "SELECT * FROM `customer_details` WHERE Email='$Username' AND Password='$Password'";


$result = mysqli_query($conn,$sql);


$resultCheck = mysqli_num_rows($result);


if($resultCheck==1)
{
    $_SESSION['Username'] = $Username;
    while ( $row = $result->fetch_assoc() ):
    $_SESSION['UserType'] = $row[ 'User_Type' ];
    endwhile;
    echo $_SESSION['Username'];
    header("Location: ./../Inside/L_home");
    exit();
}
else {
    $_SESSION['login'] = $Username;
    header("Location: ./../index?Login=error");
    exit();
}

