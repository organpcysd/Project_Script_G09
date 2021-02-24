<?php
include("db.php");
$name = $_GET["name"];
// connect to the database
$con->query("SET NAMES UTF8");
// Add Code Here …
$sql="SELECT * FROM user WHERE username LIKE '%$name%' ";

$rs=$con->query($sql);

while($row = $rs->fetch_assoc()){
    echo '<option value="'. $row['username']. '" />';
}
$con->close();
?>