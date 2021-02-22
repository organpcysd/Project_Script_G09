<head>
<?php
include("db.php");
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
<?php
    echo "<div class='container p-3 my-3 border'>";
    echo "<table border='1' align='center' width='500'>";
    echo "<table class='table table-sm'>";
    echo "<center>";
    $id = $_GET["ID"];
    $sql="SELECT*FROM content WHERE ID = $id";
    $rs=$con->query($sql);
    $row = $rs->fetch_assoc();
    ?>
    <h1> <?php echo $row['topic']; ?> </h1>
    <img src="images/content/<?php echo $row['images']; ?>" style="height: 15rem;">
    <br/>
    <br/>
    <h2>รายละเอียด</h2>
    <?php echo $row['detail']; ?>

    <br/>
    <br/>
    <h2>ช่องทางการติดต่อ</h2>
    <?php echo "เบอร์ติดต่อ : " . $row['tel'] . "<br/>"; ?>
    <?php echo "สถานที่ - ที่อยู่ : " . $row['address'] . "<br/>"; ?>
    <?php echo "อีเมลล์ : " . $row['email'] . "<br/>"; ?>
    <?php echo "</center>" ?>