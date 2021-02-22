
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
<form action="insert.php" method="post" enctype="multipart/form-data">

<div class="container p-3 my-3 border">
<legend>แบบฟอร์มเสนอมูลนิธิ สถานที่ รับบริจาค</legend>

<b> ชื่อมูลนิธิ,สถานที่ ที่รับบริจาค</b><br>
<input type="text" id="Topic"name="topic" >
<br>

    <b>รายละเอียดการรับบริจาค</b> <br>
    <textarea id="Detail"  rows="4" cols="50" name="detail" >
    </textarea>
    <br>
    
    <b>ข้อมูลการติดต่อ </b><br>

&nbsp;&nbsp;&nbsp;&nbsp;
 • ที่อยู่ <br>
<textarea id="Address"  rows="2" cols="50" name="address" > </textarea> <br>

&nbsp;&nbsp;&nbsp;&nbsp;
• เบอร์โทร <br>
<input type="text"id="Tel" name="tel" > <br>

&nbsp;&nbsp;&nbsp;&nbsp;
• E-mail <br>
<input type="email"id="Email" name="email" > <br>

&nbsp;&nbsp;&nbsp;&nbsp;
• social <br>
<input type="text" id="Social"name="social" > <br>

&nbsp;&nbsp;&nbsp;&nbsp;
• Picture 
<br>
<input type="file"id="Images" name="images"><br>
<br>
• หมวดหมู่
<br>
<input type="radio" name="education" value="education"> การศึกษา &nbsp;
<input type="radio" name="animal" value="animal"> สัตว์ &nbsp;
<input type="radio" name="donate" value="donate"> มูลนิธิต่าง ๆ

<br>
<br>
<input type="submit" class="btn btn-success" name="Save" value="Save">
<input type="reset" class="btn btn-primary " value="ล้างข้อมูล"></TD></TR>

</form>
</Table>
</body>
</html>
    
