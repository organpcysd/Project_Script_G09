<!DOCTYPE html>
<?php
    
    include("header.php");
    include("db.php");
    $id = $_GET["ID"];

    $sql="SELECT*FROM user WHERE ID = $id";    
    $rs=$con->query($sql);
    $row = $rs->fetch_assoc()
    
?>

<body>
    <center>
    <form action="edit_admin.php" method="POST" enctype="multipart/form-data">
    
        <table >
            <tr>
                <td>
                    ID :
                </td>
                <td>
                    <input type = "text" name = "id" value = "<?php echo $row['id'] ?>">
                </td>
            </tr>

            <tr>
                <td>
                     Username :
                </td>
                <td>
                    <input type = "text" name = "username" value = "<?php echo $row['username'] ?>">
                </td>
            </tr>

            <tr>
                <td>
                    Password :
                </td>
                <td>
                    <input type = "text" name = "password" value = "<?php echo $row['password'] ?>">
                </td>
            </tr>

            <tr>
                <td>
                Fullname :
                </td>
                <td>
                    <input type = "text" name = "fullname" value = "<?php echo $row['fullname'] ?>">
                </td>
            </tr>

            <tr>
                <td>
                Images :
                </td>
                <td>
                    <img src="images/user/<?php echo $row['image'] ?>" width="50">
                    <input type="file" name="image" required>
                </td>
            </tr>

            <tr>
                <td>
                Email :
                </td>
                <td>
                    <input type = "text" name = "email" value = "<?php echo $row['email'] ?>">
                </td>
            </tr>

            <td>
                    <input type = "submit" class="btn btn-success value="Save" name = "Save">
                    <input type = "button" class="btn btn-danger" onclick="location.href='adminmanage.php'" value="Cancel" />
                </td>

        </table>
    </form>
    </center>
</body>
</html>