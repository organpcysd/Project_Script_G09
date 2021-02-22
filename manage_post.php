<?php 
include('header.php');
include('db.php');
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
echo "<table class='table table-sm'>";
$query = "SELECT * FROM content ORDER BY id asc" or die("Error:" . mysqli_error()); 
$result = mysqli_query($con, $query); 
?>

<table class="table table-hover table-responsive-xl">
  <thead>
    <tr>
      <th>#</th>
      <th>Username</th>
      <th>Topic</th>
      <th>Status</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  <?php while ($row = mysqli_fetch_array($result)) {?>
    <tr>
      <td scope="row"><?php echo $row["id"]; ?></td>
      <td> <?php echo $row["id"]; ?> </td>
      <td> <?php echo $row["topic"]; ?> </td>
      <td> <?php echo $row["content_check"]; ?></td>
      <td>
      <center>
      <a class = "btn btn-outline-warning btn-sm" href="edit_post.php?ID='<?php echo $row['id']; ?>'">Edit</a>
      <a class = "btn btn-outline-warning btn-sm" href="delete.php?ID=' <?php echo $row['id']; ?> '" onclick="return confirm('Are you sure to delete #id' + <?php echo $row['id']; ?> + ' ?' );">Delete</a>
      </center>
      </td>
    </tr>
    <?php }?>
  </tbody>
</table>