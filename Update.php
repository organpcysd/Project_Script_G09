
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
        
                    $us  = $_POST["username0"];
                    $fn   = $_POST["fullname0"];
                    $em      = $_POST["email0"];
                    $tt   = $_POST["tel0"];
                    $im      = $_POST["images0"];
	?>

    <?php   $qry = "UPDATE 'user'
                                                WHERE username  = $us, fullname = $fn, email = $em, tel = $tt, images = $im ";
    $result = mysqli_query($con,$qry);
    if(!$result){
        echo "Error";
    } else echo "เพิ่มข้อมูลสำเร็จ"; ?>