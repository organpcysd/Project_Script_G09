
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
<form action="insertForm.php" method="post" enctype="multipart/form-data">

<input type = "hidden" name = "username"  value = "<?php echo $username; ?>">

<div class="container p-3 my-3 border">
<legend>แบบฟอร์มเสนอมูลนิธิ สถานที่ รับบริจาค</legend>

<b> ชื่อมูลนิธิ,สถานที่ ที่รับบริจาค</b><br>
<input type="text" id="Topic"name="topic" >

<br>

    <b>รายละเอียดการรับบริจาค</b> <br>
    <textarea id="Detail"  rows="5" cols="50" name="detail" >
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
<input type="radio" name="content_type" value="education"> การศึกษา &nbsp;
<input type="radio" name="content_type" value="animal"> สัตว์ &nbsp;
<input type="radio" name="content_type" value="donate"> มูลนิธิต่าง ๆ

<br>
<br>
<input type="submit" class="btn btn-success" name="Save" value="ส่งแบบฟอร์ม">
<input type="reset" class="btn btn-danger " value="ล้างข้อมูล"></TD></TR>

</form>
</Table>
</body>
</html>

<?php
if (isset($_POST['Save'])) {
            $username = $_POST["username"];
            $Topic = $_POST["topic"];
            $Detail = $_POST["detail"];
            $Address = $_POST["address"];
            $Tel = $_POST['tel'];
            $Email = $_POST["email"];
            $Social = $_POST["social"];
            $Images = $_FILES["images"]["name"];
            $Content_type = $_REQUEST['content_type'];

            $sql1 = "ALTER TABLE user AUTO_INCREMENT = 1";
            $con->query($sql1);
            
            $sql= "INSERT INTO content (username,topic,detail,address,tel,email,social,images,content_type) values ('$username','$Topic','$Detail','$Address','$Tel','$Email','$Social','$Images','$Content_type')";
 //if press Login
    
    if ($con->query($sql) == true) {
        move_uploaded_file($_FILES["images"]["tmp_name"], "images/content/".$_FILES["images"]["name"]); ?>
    <div class="alert alert-success" role="alert">
        ส่งแบบฟอร์มสำเร็จ
    </div>
    <?php
    } else {
        echo "Error Insert record: " . $con->error;
    }
}
?> 
    
