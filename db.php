<?php
// connect to the database
$con = mysqli_connect("play-hippy.net", "root", "Organ18032543","donatecenter");
if(!$con) {
    die("Could not connect: " . mysqli_error());
  }else{
  echo "";
  }
$con->query("SET NAMES UTF8");

?>