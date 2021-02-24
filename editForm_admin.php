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
    $id = $_GET["ID"];

    $sql="SELECT*FROM user WHERE ID = $id";    
    $rs=$con->query($sql);
    $row = $rs->fetch_assoc();
    
    echo "<div class='container p-3 my-3 border'>";
?>

<body>

    <center>
    <form action="edit_admin.php" method="POST" enctype="multipart/form-data">
    <legend>แก้ไขข้อมูล ผู้ใช้งาน</legend>
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
                    <input type = "password" name = "password" value = "<?php echo $row['password'] ?>">
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
                    <input type="file" name="image">
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


        </table>
        <br>
        <table>
            <td style="text-align:center">
                    <input type = "submit" class="btn btn-success"  value="บันทึกการแก้ไข" >
                    <input type = "button" class="btn btn-danger" onclick="location.href='adminmanage.php'" value="ยกเลิกการแก้ไข" />
            </td>
        </table>
    </form>
    </center>

</body>
</html>