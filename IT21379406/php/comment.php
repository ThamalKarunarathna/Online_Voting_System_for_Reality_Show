<?php
session_start();
include('conn.php');


$ID = $_POST['ID'];
$Name = $_POST['Name'];
$Contact = $_POST['Contact'];
$Comment = $_POST['Comment'];
$CO_ID = $_POST['CO_ID'];


$sql = "INSERT INTO  reviews  (R_P_ID, R_NAME, R_CONTACT,R_COMMENT)
            VALUES ('$ID','$Name','$Contact','$Comment')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Posted.');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


echo "<script>window.location.href = '/final/IT21379406/Competitor.php?id=$CO_ID';</script>";
