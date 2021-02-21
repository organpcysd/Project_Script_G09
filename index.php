<!DOCTYPE html>
<head>
<?php   
        include("db.php");
		include("header.php");
        session_start();
        if (!isset($_SESSION['username'])) {
            include("navbar.php");
        }else{
            include("navbar_login.php");
            $username = $_SESSION['username'];
            $sql = "SELECT * FROM user WHERE username = '" . $username . "'";
            $rs = mysqli_query($con,$sql);
            $data = mysqli_fetch_array($rs);
        }
	?>
</head>
<body>
    <div class="container">
        <?php
        if (!isset($_SESSION['username'])) {
            echo "HI INDEX!";
        ?>
        <?php
        }else{
            if ($data['user_type']==1){
                echo "HI User!";
            }elseif ($data['user_type']==2) {
                echo "Hi employee";
            }elseif ($data['user_type']==3) {
                echo "Hi Admin!";
            }else {
                echo "Who?";
            }
            echo "<a href="."logout.php".">ออกจากระบบ</a>";
        }
        ?>
    </div>
</body>
</html>