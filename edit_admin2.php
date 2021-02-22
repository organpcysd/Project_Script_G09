<?php
include("db.php");

$us = $_POST['username0'];
$fn = $_POST['fullname0'];
$em = $_POST['email0'];
$im = $_POST['images0'];

$sql="UPDATE register SET username0='$us',password='$Pw',fullname='$Fullname',images='$Images',email='$Email' WHERE ID = $id";

if ($conn->query($sql) == TRUE) {
    echo "Update Successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

echo '<br> <a href="adminmanage.php"> Go to home </a></td>';

?>