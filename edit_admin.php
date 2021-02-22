<?php
include("db.php");
$img = $_FILES['image']['name'];
$id = $_POST['id'];
$us = $_POST['username'];
$pw = $_POST['password'];
$fn = $_POST['fullname'];
$em = $_POST['email'];


$sql="UPDATE user SET username='$us',password='$pw',fullname='$fn',email='$em',image = '$img' WHERE id = $id";

if ($con->query($sql) == TRUE) {
    move_uploaded_file($_FILES["image"]["tmp_name"], "images/user/" . $_FILES["image"]["name"]);
    echo "Update Successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

echo '<br> <a href="adminmanage.php"> Go to home </a></td>';

?>