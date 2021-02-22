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
<div class="container">

<div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm">
        <form method="POST" action = "login.php">
      <div class="form-group">
      <h1> เข้าสู่ระบบ </h1>
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
    $user = $data['username'];
    $psw = $data['password'];
    if (($username == $user) && ($password == $psw)) {
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
        $user_type = $data['user_type'];
        $_SESSION['user_type_id'] = $user_type;
        header("Location: index.php");
    } else {
        echo "<br><br><br><br>";
        echo "<table width=413 border=0 align=center cellpadding=0 cellspacing=0><tr>";
        echo "<th> <font size = '5'> ชื่อผู้ใช้ หรือ รหัสผ่านไม่ถูกต้อง <br> โปรดลองอีกครั้ง</font> </th></tr> <tr><td><div align=center><form action= index.php
						name=form1 method=post><br><input id = 'btn' name=next type=submit id=next value=กลับไปยังหน้าเข้าสู่ระบบ>";
        echo "</div></td></tr></table>";
        session_destroy();
    }
}
?>