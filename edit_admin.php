<!DOCTYPE html>
<?php
    
    include("header.php");
    include("db.php");
   
    
?>

<body >
    <form action="edit_admin2.php" method="POST" >
    
        <table >
            <tr>
                <td>
                    ID :
                </td>
                <td>
                    <input type = "text" name = "id"  value = "<?php echo $row['id'] ?>">
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
                    <input type = "text" name = "images" value = "<?php echo $row['images'] ?>">
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
                    
                    <input type = "submit" value="Save" name = "Save">
                    <input type="button" onclick="location.href='view.php'" value="Cancel" />
                </td>

        </table>


    </form>
</body>
</html>