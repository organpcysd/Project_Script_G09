<?php
    include('db.php');
    $check = $_GET['name'];

    //connect to the database
    $query = "SELECT content_check FROM content WHERE content_check LIKE '%$check%'"; 
    $result = mysqli_query($con, $query); 
    
    $allStatus = "";
    while ($row = mysqli_fetch_array($result)) {
        $allStatus .= $row['content_check'] . ",";
    }

    echo $allStatus;
?>