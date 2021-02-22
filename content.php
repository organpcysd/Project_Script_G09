<?php
include('header.php');
include('db.php');
 
  //2. query ข้อมูลจากตาราง content: 
$query = "SELECT * FROM content ORDER BY topic asc" or die("Error:" . mysqli_error()); 
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($con, $query); 

//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 
echo "<div class='container p-3 my-3 border'>";
echo "<table border='1' align='center' width='500'>";
echo "<table class='table table-sm'>";

//หัวข้อตาราง
echo "<tr align='center' bgcolor='a4ebf3'>
<td>หัวข้อ</td>
<td> รูปภาพ</td>
<td>รายละเอียด</td>
<td>ที่อยู่</td>
<td>อีเมล</td>
<td>โทร</td>

</tr>";

while($row = mysqli_fetch_array($result)) { 
  
  echo "<tr align='center'>";
  echo "<td>" .$row["topic"] .  "</td> ";  
  echo "<td>" .$row["topic_show"] .  "</td> ";  
  echo "<td>" .$row["detail"] .  "</td> "; 
  echo "<td>" .$row["address"] .  "</td> ";
  echo "<td>" .$row["email"] .  "</td> ";
  echo "<td>" .$row["tel"] .  "</td> ";
 
}
echo "</table>";
//5. close connection
mysqli_close($con);
?>