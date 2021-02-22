<?php
    include("header.php");
?>

<head>
<?php
  include('navbar.php');
?>
</head>

<body>
<div class="container">
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

  <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">สมัครสมาชิก</button>

</form>
</div>
</body>

<script>

$(document).ready(function(){
   var $form = $('form');
   $form.submit(function(){
      $.post($(this).attr('action'), $(this).serialize(), function(response){
     <?php
        include('db.php');

        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
    
        $sql1 = "ALTER TABLE user AUTO_INCREMENT = 1";
        $con->query($sql1);
    
        $sql="INSERT INTO user (fullname,username,password,email) values ('$fullname','$username','$password','$email')";
    
        if ($con->query($sql) === TRUE) {
            echo " Insertion Successfully!! ";
        } else {
            echo "Error updating record: " . $con->error;
        }
    
        echo '<br> <a href="view.php"> Go to home </a></td>';
        ?>
      },'json');
      return false;
   });
});

</script>