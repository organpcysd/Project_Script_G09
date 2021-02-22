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
$query = "SELECT * FROM content WHERE username ='" . $username . "'" or die("Error:" . mysqli_error()); 
$result = mysqli_query($con, $query); 
?>
<legend>โพสต์ของฉัน</legend>
<div class="row row-cols-1 row-cols-md-3 g-4">
<?php
while ($row = mysqli_fetch_array($result)) {
    ?>
  <div class="col">
    <div class="card" style="width: 18rem;">
      <img src="images/content/<?php echo $row['images']; ?>" class="card-img-top" style="height: 15rem;">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['topic']; ?></h5>
        <p class="card-text">
        สถานะ : <?php echo $row['content_check']; ?>
        
        </p>
        <center>
        <a href="content_details.php?ID='<?php echo $row['id']; ?>'" class="btn btn-primary">รายละเอียด</a>
        </center>
      </div>
    </div>
    <br/>
    <br/>
  </div>
<?php
}
mysqli_close($con);
?>