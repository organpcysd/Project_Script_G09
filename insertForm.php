<!DOCTYPE html>
<head>
<?php    $con = mysqli_connect("play-hippy.net", "root", "Organ18032543","donatecenter");
        include("db.php");
		include("header.php");
        session_start();
        if (!isset($_SESSION['username'])) {
            include("navbar.php");
        }else{
            $username = $_SESSION['username'];
            $sql = "SELECT * FROM user WHERE username = '" . $username . "'";
            $rs = mysqli_query($con,$sql);
            $data = mysqli_fetch_array($rs);
          

            if ($data['user_type']==1) {
                    include("navbar_user.php");
            }elseif ($data['user_type']==2) {
                    include("navbar_employee.php");
            }elseif ($data['user_type']==3) {
                    include("navbar_admin.php");
        }
        }
	?>

    <form action="insert.php" method="POST">
    <center>
        <table>
            <tr>
                <td>
                    FirstName :
                </td>
                <td>
                    <input type = "text" name = "FirstName">
                </td>
            </tr>

            <tr>
                <td>
                    Lastname :
                </td>
                <td>
                    <input type = "text" name = "LastName">
                </td>
            </tr>

            <tr>
                <td>
                    Age :
                </td>
                <td>
                    <input type = "text" size="4" name = "Age">
                </td>
            </tr>

            <tr>
                <td>
                    Gender:
                </td>
                
            </tr>

            <tr>
                <td>
                </td>
                <td>
                    <input type = "submit" value="Save" name = "Save">
                    <input type = "submit" value="Cancle">
                </td>
            </tr>
        </table>
    </center>
</form>

</html>