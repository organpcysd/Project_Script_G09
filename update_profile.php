
<?php    
        include("db.php");
		include("header.php");
        session_start();
        if (!isset($_SESSION['username'])) {
            include("navbar.php");
        }else{
            $username = $_SESSION['username'];
            $sql = "SELECT * FROM user WHERE username = '" . $username . "'";
            $rs = mysqli_query($con,$sql);
            $data = mysqli_fetch_array($rs);
          

            if ($data['user_type']==1) {
                    include("navbar_user.php");
            }elseif ($data['user_type']==2) {
                    include("navbar_employee.php");
            }elseif ($data['user_type']==3) {
                    include("navbar_admin.php");
                }
            }
        ?>

<?php
$us = $_POST["username"];
$fullname = $_POST["fullname"];
$password = $_POST["password"];
$email = $_POST["email"];
$image = $_FILES["image"]["name"];
$con = mysqli_connect("play-hippy.net", "root", "Organ18032543","donatecenter");
$con->query("SET NAMES UTF8");
// get results from database
$sql="UPDATE user SET username ='$us',fullname ='$fullname',password ='$password',email ='$email',image ='$image' WHERE username = '$username'";
$rs = mysqli_query($con,$sql);

if ($con->query($sql) == TRUE) {
    move_uploaded_file($_FILES["image"]["tmp_name"], "images/user/". $_FILES["image"]["name"]);
    echo " Updating Successfully!! ";
} else {
    echo "Error updating record: " . $con->error;
}

echo '<br> <a href="index.php"> Go to home </a></td>';
?>
