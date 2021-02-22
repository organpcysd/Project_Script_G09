<!DOCTYPE html>
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
                    <input type = "submit" value="Save" name = "Save">
                    <input type="button" onclick="location.href='adminmanage.php'" value="Cancel" />
                </td>
            </tr>
        </table>
    </center>
</form>
</body>
</html>