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
 
</head>
<form method = "post" action = "update.php" enctype = "multipart/form-data">
<body>
    <div class="container" ><center>
    <table class="usermange" style="align:center" >
      <tr>
                    <th> Username : </th>
                    <td> <input type = "text" name = "name0" id = "name0" value = <?php   echo "" .$data ["username"] ;?>></td>
                </tr>
                 <tr>
                    <th> Fullname : </th>
                    <td> <input type = "text" name= "fullname0" id= "fullname0" value = <?php   echo "" .$data ["fullname"] ;?>></td>
                </tr> <tr>
                    <th> Image : </th>
                    <td> <input type = "text" name = "image0" id= "image0" value = <?php   echo "" .$data ["image"] ;?>></td>
                </tr> <tr>
                    <th> Email : </th>
                    <td> <input type = "text" name = "email0" id= "email0" value = <?php   echo "" .$data ["email"] ;?>></td>
                </tr>
     
     
    </table>
    <input type="submit" value="บันทึก">

    </div>

</body>
</form>
</html>