<?php
include('header.php');
include('db.php');
 
$query = "SELECT * FROM content ORDER BY id asc" or die("Error:" . mysqli_error()); 
$result = mysqli_query($con, $query); 

//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 
echo "<div class='container p-3 my-3 border'>";
echo "<table border='1' align='center' width='500'>";
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
        <p class="card-text"><?php echo $row['detail']; ?></p>
        <center><a href="content_details.php?ID='<?php echo $row['id']; ?>'" class="btn btn-primary">รายละเอียด</a></center>
      </div>
    </div>
  </div>
<?php
}
mysqli_close($con);
?>
</div>