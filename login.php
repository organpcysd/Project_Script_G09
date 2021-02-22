<head>
<?php
  include('header.php');
  include('navbar.php');
?>
</head>
<body>
<br/>
<br/>
<br/>
<br/>
<div class="container p-3 my-1">
<div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm p-5 my-1" style="background-color:skyblue;">
        <form method="POST" action = "login.php">
      <div class="form-group">
      <h1 style="text-align:center;"> เข้าสู่ระบบ </h1>
        <label>ผู้ใช้งาน</label>
        <input type="textbox" class="form-control" placeholder="Enter Username" id="username" name="username">
      </div>
      <div class="form-group">
        <label>รหัสผ่าน</label>
        <input type="password" class="form-control" placeholder="Enter password" id="password" name="password">
      </div>
      <div class="form-group">
      </div>
      <button type="submit" class="btn btn-primary" name="login">Login</button>
    </form>
    </div>
    <div class="col-sm">
    </div>
  </div>
  </div>

</body>

<!-- Check Login -->

<?php
if (isset($_POST['login'])) { //if press Login
    session_start();
    include("db.php");
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from user where username='" . $_POST["username"] . "' AND password = '" . $_POST["password"] . "'";
    $rs = mysqli_query($con, $sql);
    $data=mysqli_fetch_array($rs);

    if (($username == $data['username']) && ($password == $data['password'])) {
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
        $user_type = $data['user_type'];
        $_SESSION['user_type_id'] = $user_type;
        header("Location: index.php");
    } else {
        echo "<br><br><br><br>";
        ?> <div class="alert alert-danger" role="alert">
        ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้ิง กรุณาตรวจสอบอีกครั้ง!
          </div>
    <?php
        session_destroy();
    }
}
?>