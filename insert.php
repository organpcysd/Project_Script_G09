<?php
$us = $_POST['username'];
$fn = $_POST['fullname'];
$em = $_POST['email'];
$pt = $_POST['photo'];
$con = mysqli_connect("play-hippy.net", "root", "Organ18032543","donatecenter");
$conn->query("SET NAMES UTF8");
// get results from database
$sql="INSERT INTO db (Username,Fullname,Email,Photo) values ('$Username','$Fullname','$Email','$Photo')";
$rs = mysqli_query($con,$sql);

if ($rs) {
    echo " Insertion Successfully!! ";
} else {
    echo "Error updating record: " . $conn->error;
}

echo '<br> <a href="view.php"> Go to home </a></td>';
?>
