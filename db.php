<?php
// connect to the database
$conn = mysqli_connect("play-hippy.net", "root", "Organ18032543","donatecenter");
if(!$conn) {
    die("Could not connect: " . mysqli_error());
  }else{
  echo "Database Connected!";
  }
$conn->query("SET NAMES UTF8");

?>