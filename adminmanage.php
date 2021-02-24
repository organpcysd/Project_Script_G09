<!DOCTYPE html>
<html>
<head>
  <script src="showname.js"></script>
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

<a class = "btn btn-success btn-sm" a href="insertForm_admin.php"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>  เพิ่มผู้ใช้</a>
<center>
<table class="table table-hover table-responsive-xl">

  <body>
  <center>
<form action="adminmanage.php" method="get">
      <input type = "text" name="search" onkeyup="searchName(this.value)">
      <input type="submit" class="btn btn-success btn-sm" value="ค้นหา">
    </form>
</center>

      <?php

      // get results from database
    if (isset($_GET["search"])) {
      $name = $_GET["search"];
      $sql="SELECT * FROM user WHERE username LIKE '$name'";
      if($name == ""){
        $sql="SELECT * FROM user";
      }
    } else {
      $sql="SELECT * FROM user";
    }
      $rs=$con->query($sql);


      echo "<br>";
      echo "<center>";
      echo "<table border='1' cellpadding='10' width=80%>"; //open table
      echo "<tr>
      <th>ลำดับ</th>
      <th>ชื่อผู้ใช้</th>
      <th>รหัสผ่าน</th>
      <th>ชื่อ-นามสกุล</th>
      <th>รูปภาพ</th>
      <th>อีเมล</th>
      <th>ประเภทของผู้ใช้งาน</th>
      <th>แก้ไข ลบ ผู้ใช้</th>
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
      <td align = "center"> <a class = "btn btn-info btn-sm" a href="editForm_admin.php?ID='<?php echo $row['id']; ?>'">Edit</a> <a class = "btn btn-danger btn-sm" a href="delete_admin.php?ID=' <?php echo $row['id']; ?> '" onclick="return confirm('Are you sure to delete #id' + <?php echo $row['id']; ?> + ' ?' );">Delete</a></td>
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
