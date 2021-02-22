<?php
    include('db.php');

    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql1 = "ALTER TABLE user AUTO_INCREMENT = 1";
    $con->query($sql1);

    $sql="INSERT INTO user (fullname,username,password,email) values ('$fullname','$username','$password','$email')";

    if ($con->query($sql) === TRUE) {
        echo " Insertion Successfully!! ";
    } else {
        echo "Error updating record: " . $con->error;
    }

    echo '<br> <a href="view.php"> Go to home </a></td>';
?>