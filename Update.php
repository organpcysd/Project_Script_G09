<?php    
        include("db.php");
		include("header.php");
        session_start();
        if (!isset($_SESSION['username'])) {
            include("navbar.php");
        }else{
            $username = $_SESSION['username'];
            $sql = "SELECT * FROM user WHERE username = '" . $username . "'";
            $rs = mysqli_query($con, $sql);
            $data = mysqli_fetch_array($rs);
          

            if ($data['user_type']==1) {
                include("navbar_user.php");
            } elseif ($data['user_type']==2) {
                include("navbar_employee.php");
            } elseif ($data['user_type']==3) {
                include("navbar_admin.php");

                $us = $_POST['username0'];
                $fn = $_POST['fullname0'];
                $em = $_POST['email0'];
                $im = $_POST['images0'];
                $con = mysqli_connect("play-hippy.net", "root", "Organ18032543", "donatecenter");
                $conn->query("SET NAMES UTF8");
                // get results from database
                $sql="UPDATE db SET username0='$us',fullname0='$fn',email0='$em',images0='$im' WHERE ID = $id";
                $result=$conn->query($sql);

                if ($rs) {
                    echo "Update Successfully";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
            }
        }
?>