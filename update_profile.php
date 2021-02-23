
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
            include("navbar_user.php");
        }
        ?>
        <?php
            $fullname = $_POST["fullname"];
            $password = $_POST["password"];
            $email = $_POST["email"];
            $image = $_FILES["image"]["name"];
            $con->query("SET NAMES UTF8");
            // get results from database
            $sql1="UPDATE user SET fullname ='$fullname',password ='$password',email ='$email',image ='$image' WHERE username = '$username'";

            if ($con->query($sql1) == TRUE) {
                move_uploaded_file($_FILES["image"]["tmp_name"], "images/user/". $_FILES["image"]["name"]);
            
            } else {
                echo "Error updating record: " . $con->error;
            }
?>
