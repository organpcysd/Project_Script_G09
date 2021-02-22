<html>
<?php   
        include("db.php");
		    include("header.php");
        ?>
<body>
<form action="insert.php" method="post" autocomplete="on" enctype="multipart/form-data">
<div class="container p-3 my-3 border">
  <fieldset>
    <legend>แบบฟอร์มเสนอมูลนิธิ สถานที่ รับบริจาค</legend>
   <b> ชื่อมูลนิธิ,สถานที่ ที่รับบริจาค</b><br>
    <input type="text" name="topic" >
    <br>
    <b>รายละเอียดการรับบริจาค</b> <br>
    <textarea id="detail"  rows="4" cols="50" name="detail" >
    </textarea>
    <br>

    <b>ข้อมูลการติดต่อ </b><br>

    &nbsp;&nbsp;&nbsp;&nbsp;
     • ที่อยู่ <br>
    <textarea id="address"  rows="2" cols="50" name="address" > </textarea> <br>

    &nbsp;&nbsp;&nbsp;&nbsp;
    • E-mail <br>
    <input type="email" name="email" > <br>

    &nbsp;&nbsp;&nbsp;&nbsp;
    • social <br>
    <input type="text" name="social" > <br>

    &nbsp;&nbsp;&nbsp;&nbsp;
    • Picture 
    <br>
    <input type="file" name="images"><br>
  

    <br>
    <button type="button" class="btn btn-success">ส่งแบบฟอร์ม</button>
    <input type="reset" class="btn btn-primary " value="ล้างข้อมูล"></TD></TR>

</div>
  </fieldset>
</form>
</div>
</body>
</html>