
<html>
<?php
  include("db.php");
  include("header.php");
  $id = $_GET["ID"];
  $sql="SELECT*FROM content WHERE ID = $id";    
  $rs=$con->query($sql);
  $row = $rs->fetch_assoc()
  
?>

<body>
<form action="inser_editpost.php" method="post" enctype="multipart/form-data">

<div class="container p-3 my-3 border">
<legend>แบบฟอร์มเสนอมูลนิธิ สถานที่ รับบริจาค</legend>

<b> ชื่อมูลนิธิ,สถานที่ ที่รับบริจาค</b><br>
<input type="text" id="Topic"name="topic" value="<?php echo $row['topic'] ?>">

<br>
    <b>รายละเอียดการรับบริจาค</b> <br>
    <textarea id="Detail"  rows="4" cols="50" name="detail" value="<?php echo $row['detail'] ?>" >
    </textarea>
    <br>   
    <b>ข้อมูลการติดต่อ </b><br>

&nbsp;&nbsp;&nbsp;&nbsp;
 • ที่อยู่ <br>
<textarea id="Address"  rows="2" cols="50" name="address" value="<?php echo $row['address'] ?>"> </textarea> <br>

&nbsp;&nbsp;&nbsp;&nbsp;
• เบอร์โทร <br>
<input type="text"id="Tel" name="tel" value="<?php echo $row['tel'] ?>"> <br>

&nbsp;&nbsp;&nbsp;&nbsp;
• E-mail <br>
<input type="email"id="Email" name="email" value="<?php echo $row['email'] ?>"> <br>

&nbsp;&nbsp;&nbsp;&nbsp;
• social <br>
<input type="text" id="Social"name="social" value="<?php echo $row['social'] ?>"> <br>

&nbsp;&nbsp;&nbsp;&nbsp;
• หมวดหมู่
<br>
<input type="text" id="content_type"name="content_type" value="<?php echo $row['content_type'] ?>"> 
<br>
• สถานะโพส 
<br>
<select name="content_check" id="categories" value="<?php echo $row['content_check'] ?>" >
<option >ตรวจสอบเเล้ว</option>
<option >ยังไม่ได้ตรวจสอบ</option>
</select>
<br>
<br>
<input type="submit" class="btn btn-success" name="Save" value="Save">
<input type="reset" class="btn btn-primary " value="ล้างข้อมูล"></TD></TR>

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
    
