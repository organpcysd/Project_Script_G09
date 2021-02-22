<!DOCTYPE html>
<head>
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
</head>
<body>
    <div class="container">
        <?php
        if (!isset($_SESSION['username'])) {
            include('content.php');
        ?>
        <?php
        }else{                                                            
            if ($data['user_type']==1){
                echo "<br/> <a href="."insertForm.php" . " class='"."btn btn-outline-primary btn-sm'".">สร้างโพสต์</a>" . " " ."<a href="."mypost.php" . " class='"."btn btn-outline-primary btn-sm'".">โพสต์ของฉัน</a>";
                include('content.php');
            }elseif ($data['user_type']==2) {
                echo "<br/> <a href=''" . " class='"."btn btn-outline-primary btn-sm'".">แก้ไขโพสต์</a>";
            }elseif ($data['user_type']==3) {
                echo "<br/> <a href=''" . " class='"."btn btn-outline-primary btn-sm'".">สร้างโพสต์</a>" . " " . "<a href=''" . " class='"."btn btn-outline-primary btn-sm'".">แก้ไขข้อมูลผู้ใช้</a>";
            }else {
                echo "Who?";
            }
            echo "<a href="."logout.php".">ออกจากระบบ</a>";
        }
        ?>
    </div>
</body>
</html>