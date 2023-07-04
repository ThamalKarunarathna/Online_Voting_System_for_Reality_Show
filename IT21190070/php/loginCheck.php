<?php
session_start();
include('conn.php');

$Email = $_POST['Email'];
$Password = $_POST['Password'];
$En_password = sha1($Password);


$sql = "SELECT * FROM users WHERE U_EMAIL='$Email' AND U_PASSWORD='$En_password' LIMIT 1";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $_SESSION['NAME'] = $row["U_NAME"];
        $_SESSION['ID'] = $row["U_ID"];
        $_SESSION['EMAIL'] = $row["U_EMAIL"];
        $_SESSION['CONTACT'] = $row["U_CONTACT"];
        echo "<script>window.location.href = '/final/IT21189876/User_Account.php';</script>";
    }
} else {
    echo "<script>alert('Login Failed! Try Again.');</script>";
    echo "<script>window.location.href = '/final/IT21190070/Login.php';</script>";
}
