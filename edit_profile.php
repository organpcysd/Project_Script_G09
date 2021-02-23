<html>
<head>
    <link rel= "stylesheet" type= "text/css" href= "mystyle.css">
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
            include("navbar_user.php");
        }
        echo "<div class='container p-3 my-3 border'>";
        echo "<h3 class='fieldset-title'>ข้อมูลส่วนตัว</h3>";
	?>
</head>
<body>
<div class="container">
    <div class="view-account">
        <section class="module">
                <div class="content-panel">
                    <form class="form-horizontal" method = "post" action = "edit_profile.php" enctype = "multipart/form-data">
                        <fieldset class="fieldset">
                        <br/>
                        <br/>
                            <div class="form-group avatar">
                                <figure class="figure col-md-2 col-sm-3 col-xs-12">
                                    <img class="img-rounded img-responsive" src="images/user/<?php   echo "" .$data ["image"] ;?> " class="card-img-top" style="width: 150px">
                                </figure>
                                <div class="form-inline col-md-10 col-sm-9 col-xs-12">
                                    <input type="file" name = "image" class="file-uploader pull-left">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label">ชื่อผู้ใช้</label>
                                <fieldset disabled>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" name = "username" class="form-control" value=<?php   echo "" .$data ["username"] ;?>>
                                </div>
                            </fieldset>
                            </div>
        
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label">ชื่อ - นามกลุล</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" name = "fullname" class="form-control" value=<?php   echo "" .$data ["fullname"] ;?>>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label">รหัสผ่าน</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="password" name = "password" class="form-control" value=<?php   echo "" .$data ["password"] ;?>>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="fieldset">
                            <h3 class="fieldset-title">ช่องทางติดต่อ</h3>
                            <div class="form-group">
                                <label class="col-md-2  col-sm-3 col-xs-12 control-label">อีเมล</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="email" name = "email"  class="form-control" value=<?php   echo "" .$data ["email"] ;?>>   
                                </div>
                            </div>
                        </fieldset>
                        <hr>
                        <div class="form-group">
                            <div class="col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0">
                                <input class="btn btn-success" type="submit" value="บันทึก" name="save">
                                <input class="btn btn-danger" type = "reset" value="รีเซ็ต">
                            </div>
                        </div>
                    </form>
                </div>
        </section>
    </div>
</div>
</body>
</html>

<?php
if (isset($_POST['save'])) {
    $fullname = $_POST["fullname"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $image = $_FILES["image"]["name"];
    $con->query("SET NAMES UTF8");
    // get results from database
    $sql1="UPDATE user SET fullname ='$fullname',password ='$password',email ='$email',image ='$image' WHERE username = '$username'";

    if ($con->query($sql1) == true) {
        move_uploaded_file($_FILES["image"]["tmp_name"], "images/user/". $_FILES["image"]["name"]);
        echo("<meta http-equiv='refresh' content='1'>");
        ?>
        <div class="alert alert-success" role="alert">
        แก้ไขสำเร็จ
    </div>
        <?php
    } else {
        echo "Error updating record: " . $con->error;
    }
}
?>
