<?php
include("db.php");

$us = $_POST['username'];
$fn = $_POST['fullname'];
$ps = $_POST['password'];
$em = $_POST['email'];
$im = $_FILES['image']['name'];
$sql1 = "ALTER TABLE user AUTO_INCREMENT = 1";
$con->query("SET NAMES UTF8");    
$sql="INSERT INTO user (fullname,username,password,email,image) values ('$us','$fn','$ps','$em','$im')";

if ($con->query($sql) === true) {
    move_uploaded_file($_FILES["image"]["tmp_name"], "images/user/" . $_FILES["image"]["name"]);
    echo " Insertion Successfully!! ";
} else {
    echo "Error updating record: " . $con->error;
}
$im = $_POST['image'];


$sql1 = "ALTER TABLE register AUTO_INCREMENT = 1";
$conn->query("SET NAMES UTF8");
$sql="INSERT INTO register (username,fullname,password,email,images) values ('$us','$fn','$ps','$em','$im')";

if ($conn->query($sql) === TRUE) {
    echo " Insertion Successfully!! ";
} else {
    echo "Error updating record: " . $conn->error;
}

echo '<br> <a href="adminmanage.php"> Go to home </a></td>';
?>