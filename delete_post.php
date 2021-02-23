<?php
include("db.php");

$id = $_GET["ID"];

$sql="DELETE FROM content WHERE ID = $id";

if ($con->query($sql) == TRUE) {
    header("Location: manage_post.php");
} else {
    echo "Error updating record: " . $con->error;
}
?>