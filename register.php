<?php
    include("header.php");
?>

<head>
<?php
  include('navbar.php');
?>
</head>

<body>
<br/>
<br/>
<br/>
<br/>

<div class="container">
<div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm">
    <h1> สมัครสมาชิก </h1>
            <form action="register.php" method="POST" enctype="multipart/form-data">

            <div class="mb-3">
                <label class="form-label">ชื่อ-นามสกุล</label>
                <input type="text" class="form-control" name="fullname">
            </div>

            <div class="mb-3">
                <label class="form-label">อีเมลล์</label>
                <input type="email" class="form-control" name="email">
            </div>

            <div class="mb-3">
                <label class="form-label">ชื่อผู้ใช้</label>
                <input type="text" class="form-control" name="username">
            </div>

            <div class="mb-3">
                <label class="form-label">รหัสผ่าน</label>
                <input type="password" class="form-control" name="password"0>
            </div>

            <button type="submit" class="btn btn-primary" name="register" >สมัครสมาชิก</button>

            </form>
    </div>
    <div class="col-sm">
    </div>
  </div>
  </div>

</body>
<?php
if (isset($_POST['register'])) {
    include('db.php');

    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $sql1 = "ALTER TABLE user AUTO_INCREMENT = 1";
    $con->query($sql1);
    
    $sql="INSERT INTO user (fullname,username,password,email) values ('$fullname','$username','$password','$email')";
    
    if ($con->query($sql) === true) {
        header("Location: login.php");
    } else {
        echo "Error updating record: " . $con->error;
    }
}
?>