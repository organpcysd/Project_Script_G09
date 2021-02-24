
<html>
<?php
  include("db.php");
  include("header.php");
  session_start();
  $id = $_GET["ID"];
  $_SESSION["conid"] = $id;  
  $sql="SELECT*FROM content WHERE ID = $id";    
  $rs=$con->query($sql);
  $row = $rs->fetch_assoc();
  $check = $row['content_check'];
?>

<body>
<form action="insert_editpost.php" method="post" enctype="multipart/form-data">

<div class="container p-3 my-3 border">
<legend>แบบฟอร์มเสนอมูลนิธิ สถานที่ รับบริจาค</legend>

<b> ชื่อมูลนิธิ,สถานที่ ที่รับบริจาค</b><br>
<input type="text" id="Topic"name="topic" value="<?php echo $row['topic'] ?>">

<br>
    <b>รายละเอียดการรับบริจาค</b> <br>
    <textarea id="Detail"  rows="4" cols="50" name="detail" value="" >
    <?php echo $row['detail'] ?>
    </textarea>
    <br>   
    <b>ข้อมูลการติดต่อ </b><br>

&nbsp;&nbsp;&nbsp;&nbsp;
 • ที่อยู่ <br>
<textarea id="Address"  rows="2" cols="50" name="address" value=""><?php echo $row['address'] ?> </textarea> <br>

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
<select name="content_type" id="categories" value="">
<?php if ($row['content_type'] == "สัตว์") { ?>
<option ><?php echo $row['content_type'] ?></option>
<option >การศึกษา</option>
<option >มูลนิธิต่างๆ</option>
<?php } elseif ($row['content_type'] == "การศึกษา") { ?>
<option ><?php echo $row['content_type'] ?></option>
<option >สัตว์</option>
<option >มูลนิธิต่างๆ</option>
<?php } else{ ?>
<option ><?php echo $row['content_type'] ?></option>
<option >สัตว์</option>
<option >มูลนิธิต่างๆ</option>
<?php } ?>
</select>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
• สถานะโพส 
<br>
<select name="content_check" id="categories" value="" ><?php echo $row['content_check'] ?>
<?php if ($row['content_check'] == "ตรวจสอบเเล้ว") { ?>
<option ><?php echo $row['content_check'] ?></option>
<option >ยังไม่ได้ตรวจสอบ</option>
<?php } else { ?>
<option ><?php echo $row['content_check'] ?></option>
<option >ตรวจสอบเเล้ว</option>
<?php } ?>
</select>
<br>
<br>
<input type="submit" class="btn btn-success" name="Save" value="บันทึกการแก้ไข">

</form>
</Table>
</body>
</html>
    
