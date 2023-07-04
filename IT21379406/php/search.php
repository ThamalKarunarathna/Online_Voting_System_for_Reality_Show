<?php
session_start();
include('conn.php');


$search = $_POST['search'];


$sql2 = "SELECT * FROM  competitors WHERE CO_NAME LIKE '$search%' LIMIT 1";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    while ($row = $result2->fetch_assoc()) {
        $id = $row['CO_ID'];
        echo "<script>window.location.href = '/final/IT21379406/Competitor.php?id=$id';</script>";
    }
} else {
    echo "<script>alert('no data! Try Again.');</script>";
    echo "<script>window.location.href = '/final/IT21189876/Home.php';</script>";
}
