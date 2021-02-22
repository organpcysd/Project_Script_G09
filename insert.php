<?php

// connect to the database
$con = mysqli_connect("play-hippy.net", "root", "Organ18032543","donatecenter");
if(!$con) {
    die("Could not connect: " . mysqli_error());
  }else{
  echo "";
  }
  if(move_uploaded_file($_FILES["images"]["tmp_name"],"images/".$_FILES["images"]["name"]))
        {
            echo "Copy/Upload Complete<br>";
    
    
        }
$con->query("SET NAMES UTF8");

            $Topic = $_POST["topic"];
            $Detail = $_POST["detail"];
            $Address = $_POST["address"];
            $Tel = $_POST['tel'];
            $Email = $_POST["email"];
            $Social = $_POST["social"];
            $Images = $_POST["images"];



$sql= "INSERT INTO content (topic,datail,address,tel,email,social,images) values ('$Topic,$Detail,$Address,$Tel,$Email,$Social,$Images)";


if ($con->query($sql) == TRUE) {
    echo " Insertion Successfully!! ";
} else {
    echo "Error updating record: " . $con->error;
}

echo '<br> <a href="index.php"> Go to home </a></td>';

?> 
