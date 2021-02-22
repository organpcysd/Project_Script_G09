<?php
// connect to the database
$con = mysqli_connect("play-hippy.net", "root", "Organ18032543","donatecenter");
session_start();
$con->query("SET NAMES UTF8");
            
            $id = $_SESSION["conid"];
            $Topic = $_POST["topic"];
            $Detail = $_POST["detail"];
            $Address = $_POST["address"];
            $Tel = $_POST['tel'];
            $Email = $_POST["email"];
            $Social = $_POST["social"];
            $Content_type = $_REQUEST['content_type'];
            $Content_check = $_REQUEST['content_check'];


$sql= "UPDATE content SET topic='$Topic',detail='$Detail',address='$Address',tel='$Tel',Email='$Email',social='$Social',content_type='$Content_type',content_check='$Content_check' WHERE id = $id";


if ($con->query($sql) == TRUE) {
    echo " Update Successfully!! ";
} else {
    echo "Error Update record: " . $con->error;
}

echo '<br> <a href="manage_post.php"> Go to Content</a></td>';

?> 


