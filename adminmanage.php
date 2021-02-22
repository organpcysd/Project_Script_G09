<!DOCTYPE html>
<html>
<title></title>
<script src="showName.js"></script>
<head>
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
</head>
<center>
<table class="table table-hover table-responsive-xl">
  <body>
    <a class = "btn btn-outline-danger btn-sm" a href="insertForm_admin.php">Insert</a>
      <?php
      if (isset($_GET["search"])) {
          $name = $_GET["search"];
          $sql="SELECT * FROM user WHERE username LIKE '$name'";
        } else {
          $sql="SELECT * FROM user";
        }
      // get results from database
      $sql="SELECT * FROM user";
      $rs=$con->query($sql);
      echo "<br>";
      echo "<center>";
      echo "<table border='1' cellpadding='10' width=80%>"; //open table
      echo "<tr>
      <th>ID</th>
      <th>User Name</th>
      <th>Passwod</th>
      <th>Full Name</th>
      <th>Image</th>
      <th>Email</th>
      <th>User Type</th>
      <th>delete/edit</th>
      </tr>";
      // loop through results of database query, displaying them in the table
      while($row=mysqli_fetch_array($rs)) {?>
      <tr>
      <td align = "center"> <?php echo $row['id']; ?> </td>
      <td align = "center" > <?php echo $row['username'] ?> </td>
      <td align = "center"> <?php echo $row['password'] ?> </td>
      <td align = "center"> <?php echo $row['fullname'] ?> </td>
      <td align = "center"> <img src="images/user/<?php echo $row['image'] ?>" width="50"> </td>
      <td align = "center"> <?php echo $row['email'] ?> </td>
      <td align = "center"> <?php echo $row['user_type'] ?> </td>
      <td align = "center"> <a class = "btn btn-outline-warning btn-sm" a href="editForm_admin.php?ID='<?php echo $row['id']; ?>'">Edit</a> <a class = "btn btn-outline-warning btn-sm" a href="delete_admin.php?ID=' <?php echo $row['id']; ?> '" onclick="return confirm('Are you sure to delete #id' + <?php echo $row['id']; ?> + ' ?' );">Delete</a></td>
      </tr>
      <?php
      }
      echo "</table>"; // close table
      $con->close(); // close database connection
      ?>


  </body>
</table>
<center>
</form>
</html>
