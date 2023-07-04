<?php
session_start();
include('conn.php');


$P_ID = $_GET['id'];
$ID = $_SESSION['ID'];
$date = date("Y-m-d");
$time = date("h:i:sa");


$sql = "INSERT INTO  votes  (V_USER_ID, V_P_ID, V_DATE,V_TIME)
            VALUES ('$ID','$P_ID','$date','$time')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Voted.');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


echo "<script>window.location.href = '/final/IT21377358/Voting.php';</script>";
