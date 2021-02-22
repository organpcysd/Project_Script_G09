<!DOCTYPE html>
<html>
<title></title>
<script src="showName.js"></script>
<head>
  <?php
          include("db.php");
        session_start();
        ?>
</head>

<body>
<form action="adminmanage.php" method="get" name = "myForm">
  <center>
    <a href="insertForm.php?ID='<?php echo $row['ID']; ?>'">Insert</a>
        <input list="name" name="search" onkeyup="searchName(this.value)">
            <datalist id="name">
                <option value="%">
            </datalist>
        <input type="submit" value="search">
  </center>
    </form>
    <?php
    if (isset($_GET["search"])) {
        $name = $_GET["search"];
        $sql="SELECT * FROM user WHERE Fullname LIKE '$name'";
       } else {
        $sql="SELECT * FROM register";
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
    <td align = "center"> <img src="<?php echo $row['image'] ?>" width="50"> </td>
    <td align = "center"> <?php echo $row['email'] ?> </td>
    <td align = "center"> <?php echo $row['user_type'] ?> </td>
    <td align = "center"> <a href="editForm.php?ID='<?php echo $row['ID']; ?>'">Edit</a> <a href="delete.php?ID=' <?php echo $row['ID']; ?> '" onclick="return confirm('Are you sure to delete #id' + <?php echo $row['ID']; ?> + ' ?' );">Delete</a></td>
    </tr>
    <?php
    }
    echo "</table>"; // close table
    $con->close(); // close database connection
    ?>


</body>
</form>
</html>
