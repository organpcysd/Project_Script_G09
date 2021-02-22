<head>
<?php
include("db.php");
include("db.php");
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
</head>
<?php
    $id = $_GET["ID"];
    $sql="SELECT*FROM content WHERE ID = $id";
    $rs=$con->query($sql);
    $row = $rs->fetch_assoc();
    echo $row['topic'];
?>