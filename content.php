<?php
include('header.php');
include('db.php');
 
  //2. query ข้อมูลจากตาราง usre: 
$query = "SELECT * FROM user ORDER BY username asc" or die("Error:" . mysqli_error()); 
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($con, $query); 

//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 
echo "<div class='container p-3 my-3 border'>";
echo "<table border='1' align='center' width='500'>";
echo "<table class='table table-sm'>";

//หัวข้อตาราง
echo "<tr align='center' bgcolor='a4ebf3'>
<td>Uername</td>
<td>รหัสผ่าน</td>
<td>ชื่อ-นามสกุล</td>
<td>อีเมล์</td>
<td>ประเภทผู้ใช้</td>
</tr>";
while($row = mysqli_fetch_array($result)) { 
  
  echo "<tr align='center'>";
  echo "<td>" .$row["username"] .  "</td> ";  
  echo "<td>" .$row["password"] .  "</td> "; 
  echo "<td>" .$row["fullname"] .  "</td> ";
  echo "<td>" .$row["email"] .  "</td> ";
  echo "<td>" .$row["user_type"] .  "</td> ";
 
}
echo "</table>";
//5. close connection
mysqli_close($con);
?>