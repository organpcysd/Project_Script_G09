<?php
include("db.php");

$id = $_GET["ID"];

$sql="DELETE FROM user WHERE ID = $id";

if ($con->query($sql) == TRUE) {
    header('Location: adminmanage.php');
} else {
    echo "Error updating record: " . $con->error;
}

echo '<br> <a href="adminmanage.php"> Go to home </a></td>';
?>