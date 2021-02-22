<html>
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
<body>
<div class="container p-3 my-3 border">
  <fieldset>
    <legend>โพสต์ของฉัน</legend>
   
</div>
</body>
</html>