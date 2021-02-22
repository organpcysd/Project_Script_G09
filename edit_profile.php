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
          

            if ($data['user_type']==1) {
                    include("navbar_user.php");
            }elseif ($data['user_type']==2) {
                    include("navbar_employee.php");
            }elseif ($data['user_type']==3) {
                    include("navbar_admin.php");
        }
        }
	?>
</head>
<body>
<div class="container">
    <div class="view-account">
        <section class="module">
                <div class="content-panel">
                    <form class="form-horizontal" method = "post" action = "update_profile.php" enctype = "multipart/form-data">
                        <fieldset class="fieldset">
                        <table align="Center">
                                    <tr>
                                    
                                        <td><img src="./images/avatar/avatar1.jpg" id="ava1" width="45" onclick="changeImg(1)"></td>
                                    
                                        <td><img src="./images/avatar/avatar2.jpg" id="ava2" width="45" onclick="changeImg(2)"></td>
                                    
                                        <td><img src="./images/avatar/avatar3.jpg" id="ava3" width="45" onclick="changeImg(3)"></td>
                                    
                                        <td><img src="./images/avatar/avatar4.jpg" id="ava4" width="45" onclick="changeImg(4)"></td>
                                    
                                        <td><img src="./images/avatar/avatar5.jpg" id="ava5" width="45" onclick="changeImg(5)"></td>
                                    
                                        <td><img src="./images/avatar/avatar6.jpg" id="ava6" width="45" onclick="changeImg(6)"></td>
                                    </tr>
                                </table>
                            <h3 class="fieldset-title">ข้อมูลส่วนตัว</h3>
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
                                    <input type="text" name = "password" class="form-control" value=<?php   echo "" .$data ["password"] ;?>>
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
                                <input class="btn btn-success" type="submit" value="บันทึก">
                                <input class="btn btn-danger" type = "submit" value="ยกเลิก">
                            </div>
                        </div>
                    </form>
                </div>
        </section>
    </div>
</div>
</body>
<script>
              $(document).ready(function(){
                $("#ava1").click(function(){
                   $("body").css("backgroundColor","fcd1d1");
                });
 
                $("#ava2").click(function(){
                  $("body").css("backgroundColor","aee1e1");
                });
                
                $("#ava3").click(function(){
                    $("body").css("backgroundColor","#FFC478");
                });

                $("#ava4").click(function(){
                   $("body").css("backgroundColor","1687a7");
                });

                $("#ava5").click(function(){
                   $("body").css("backgroundColor","a98b98");
                });

                $("#ava6").click(function(){
                   $("body").css("backgroundColor","fde8cd");
                });

});
            </script>
</html>
