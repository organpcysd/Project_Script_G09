<?php
include('header.php');
include('db.php');

$check = "ตรวจสอบเเล้ว";
$query = "SELECT * FROM content WHERE content_check = '" . $check . "'"; 
$result = mysqli_query($con, $query); 

echo "<div class='container p-3 my-3 border'>";
echo "<table class='table table-sm'>";
?>

<div class="row row-cols-1 row-cols-md-3 g-4">
<?php
while ($row = mysqli_fetch_array($result)) {
    ?>
  <div class="col">
    <div class="card" style="width: 18rem;">
      <img src="images/content/<?php echo $row['images']; ?>" class="card-img-top" style="height: 15rem;">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['topic']; ?></h5>
        <center><a href="content_details.php?ID='<?php echo $row['id']; ?>'" class="btn btn-primary">รายละเอียด</a></center>
      </div>
    </div>
    <br/>
    <br/>
  </div>
<?php
}
mysqli_close($con);
echo "</div>";
?>