<?php
    include("header.php");
?>
<div class="container">
<h1> สมัครสมาชิก </h1>
<form action="insertuser.php" method="POST" enctype="multipart/form-data">

<div class="mb-3">
    <label class="form-label">ชื่อ-นามสกุล</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label class="form-label">ชื่อผู้ใช้</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label class="form-label">รหัสผ่าน</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">สมัครสมาชิก</button>

</form>
</div>