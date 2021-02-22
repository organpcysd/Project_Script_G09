<html>
<?php   
        include("db.php");
		    include("header.php");
        ?>
<body>
<div class="container p-3 my-3 border">
<form action="index.php">
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
    <!-- Star เก็บรูปไว้ใน Databest!-->
  <!--  <?php
	if(move_uploaded_file($_FILES["images"]["tmp_name"],"myfile/".$_FILES["images"]["name"]))
	{
		echo "Copy/Upload Complete<br>";

		//*** Insert Record ***//
		$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
		$objDB = mysql_select_db("play-hippy.net");
		$strSQL = "INSERT INTO files ";
		$strSQL .="(Name,FilesName) VALUES ('".$_POST["txtName"]."','".$_FILES["images"]["name"]."')";
		$objQuery = mysql_query($strSQL);		
	}
?>
 <!-- End เก็บรูปไว้ใน Databest!--> 

    <br>
    <button type="button" class="btn btn-success">ส่งแบบฟอร์ม</button>
    

</div>
  </fieldset>
</form>
</div>
</body>
</html>