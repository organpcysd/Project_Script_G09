<?php
include("connect.php");
$name = $_GET["name"];
$sql="SELECT * FROM user WHERE FirstName LIKE '%$name%' ";

$rs=$conn->query($sql);
// Add Code Here …
while($row = $rs->fetch_assoc()){
    echo "<option value='" . $fn ."'>"."<br>";
}
$conn->close();
?>
