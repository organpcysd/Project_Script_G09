
<!DOCTYPE html>
<head>
<?php  include('db.php');
        if(isset($_GET['id']))
        {
            $id=$_GET['id'];
                if(isset($_POST['submit']))
                {
                    $username   = $_POST['username'];
                    $email      = $_POST['email'];
                    $password   = $_POST['password'];
                    $fullname   = $_POST['fullname'];
                    $user_type  = $_POST['user_type'];
                    $query3     = mysql_query("UPDATE tbl_staffs
                                              SET username='$username', email='$email', password='$password', WHERE id='$id'");
                }

	?>
    </head>
     <table>
 <form method="post">
 <tr>
    <td><b>Username:</b></td><td><input type="text" name="username" style="width:255px" value="<?php echo $query2['username']; ?>" /></td>
  </tr>
  <tr>
    <td><b>Fullname:</b></td><td><input type="text" name="fullname" style="width:255px" value="<?php echo $query2['fullname']; ?>" /></td>
  </tr>
  <tr>
    <td><b>Email:</b></td><td><input type="text" name="email" style="width:255px" value="<?php echo $query2['email']; ?>" /></td>
  </tr>
  <tr>
    <td><b>Password:</b></td><td><input type="text" name="password" style="width:255px" value="<?php echo $query2['password']; ?>" /></td>
  </tr>
  
  <tr>
    <td colspan="2" align="right">
    <br />
        <span title="Click to update the user details"><input type="submit" name="submit" value="Update" /></span>
    </td>
  </tr>
  </table>

  </form>
</html>