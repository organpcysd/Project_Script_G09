<?php
// connect to the database
$con = mysqli_connect("play-hippy.net", "root", "Organ18032543","donatecenter");

$con->query("SET NAMES UTF8");
            
            $username = $_POST["username"];
            $Topic = $_POST["topic"];
            $Detail = $_POST["detail"];
            $Address = $_POST["address"];
            $Tel = $_POST['tel'];
            $Email = $_POST["email"];
            $Social = $_POST["social"];
            $Images = $_FILES["images"]["name"];
            $Content_type = $_REQUEST['content_type'];


$sql= "INSERT INTO content (username,topic,detail,address,tel,email,social,images,content_type) values ('$username','$Topic','$Detail','$Address','$Tel','$Email','$Social','$Images','$Content_type')";


if ($con->query($sql) == TRUE) {
    move_uploaded_file($_FILES["images"]["tmp_name"],"images/content/".$_FILES["images"]["name"]);
    echo " Insertion Successfully!! ";
} else {
    echo "Error Insert record: " . $con->error;
}

echo '<br> <a href="index.php"> Go to home </a></td>';

?> 
