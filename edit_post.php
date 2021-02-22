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
	
   
        echo "<div class='container p-3 my-3 border'>";

    echo "<table class='table table-sm'>";

    $query = "SELECT * FROM content ORDER BY id asc" or die("Error:" . mysqli_error()); 
    $result = mysqli_query($con, $query); 
?>

<?	ob_start();
	session_start();
	include("connect.php");
	
	$query = "UPDATE service2 SET 
	status='pass'
	WHERE id_ser='".$_GET['status']."'";
	mysql_query($query)or die(mysql_error());
	header("Location: report_laundry.php");
?>


</head>
<body>
</html>
