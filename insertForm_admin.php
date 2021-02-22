<!DOCTYPE html>
<?php
    
    include("header.php");
    include("db.php");
    session_start();
        if (!isset($_SESSION['username'])) {
            include("navbar.php");
        }else{
            $username = $_SESSION['username'];
            $sql = "SELECT * FROM user WHERE username = '" . $username . "'";
            $rs = mysqli_query($con,$sql);
            $data = mysqli_fetch_array($rs);
            include("navbar_user.php");
        }
    
    echo "<div class='container p-3 my-3 border'>";
?>
<form action="insert_admin.php" method="POST" enctype="multipart/form-data">
    <center>
        <table>
            <tr>
                <td>
                    Username :
                </td>
                <td>
                    <input type = "text" name = "username" required>
                </td>
            </tr>
            <tr>
                <td>
                    Password :
                </td>
                <td>
                    <input type = "text" name = "password" required>
                </td>
            </tr>

            <tr>
                <td>
                    Fullname :
                </td>
                <td>
                    <input type = "text" name = "fullname" required>
                </td>
            </tr>

            <tr>
                <td>
                    Image :
                </td>
                <td>                  
                    <input type="file" name="image" required>
                </td>
            </tr>

            <tr>
                <td>
                    Email :
                </td>
                <td>
                    <input type = "text"  name = "email" required>
                </td>
            </tr>

            <tr>
                <td>
                </td>
                <td>
                    <input type = "submit" class="btn btn-success value="Save" name = "Save">
                    <input type="button" class="btn btn-danger onclick="location.href='adminmanage.php'" value="Cancel" />
                </td>
            </tr>
        </table>
    </center>
</form>
</body>
</html>