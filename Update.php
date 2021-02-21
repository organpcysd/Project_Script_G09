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
        
                    $us  = $_POST['name0'];
                    $em      = $_POST['email0'];
                    $fn   = $_POST['fullname0'];
	?>

    <?php   $qry = "UPDATE 'user'
                                                WHERE username  = $us,fullname = $fn,email = $em ";
    $result = mysqli_query($con,$qry);
    if(!$result){
        echo "Error";
    } else echo "เพิ่มข้อมูลสำเร็จ"; ?>