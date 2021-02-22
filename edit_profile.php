<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="showData.js"></script>
    <script type="text/javascript">
     function changeImg(imgID) {
     if(imgID == 1) {
     document.getElementById("pic").innerHTML='<img src="./images/avatar/avatar1.jpg">';
     document.getElementById("hid").value="./images/avatar/avatar1.jpg";

     } else if(imgID == 2) {
     document.getElementById("pic").innerHTML='<img src="./images/avatar/avatar2.jpg">';
     document.getElementById("hid").value="./images/avatar/avatar2.jpg";

     } else if(imgID == 3) {
     document.getElementById("pic").innerHTML='<img src="./images/avatar/avatar3.jpg">';
     document.getElementById("hid").value="./images/avatar/avatar3.jpg";

     } else if(imgID == 4) {
     document.getElementById("pic").innerHTML='<img src="./images/avatar/avatar4.jpg">';
     document.getElementById("hid").value="./images/avatar/avatar4.jpg";

     } else if(imgID == 5) {
     document.getElementById("pic").innerHTML='<img src="./images/avatar/avatar5.jpg">';
     document.getElementById("hid").value="./images/avatar/avatar5.jpg";

     } else if(imgID == 6) {
     document.getElementById("pic").innerHTML='<img src="./images/avatar/avatar6.jpg">';
     document.getElementById("hid").value="./images/avatar/avatar6.jpg";
 }
}
</script>
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
                            <h3 class="fieldset-title">Personal Info</h3>
                            <div class="form-group avatar">
                                <figure class="figure col-md-2 col-sm-3 col-xs-12">
                                <tr>
                                    <td id="pic"><img  src="./images/avatar/avatar1.jpg"></td>
                                    <td><input type="hidden" id="hid" name="avatar" value="./images/avatar/avatar1.jpg"></td>
                                </tr>
                                    <img class="img-rounded img-responsive" src="images/user/<?php   echo "" .$data ["image"] ;?> " class="card-img-top" style="height: 5rem;">
                                </figure>
                                <table align="center">
                                    <tr>
                                    
                                        <td><img src="./images/avatar/avatar1.jpg" id="ava1" width="45" onclick="changeImg(1)"></td>
                                    
                                        <td><img src="./images/avatar/avatar2.jpg" id="ava2" width="45" onclick="changeImg(2)"></td>
                                    
                                        <td><img src="./images/avatar/avatar3.jpg" id="ava3" width="45" onclick="changeImg(3)"></td>
                                    
                                        <td><img src="./images/avatar/avatar4.jpg" id="ava4" width="45" onclick="changeImg(4)"></td>
                                    
                                        <td><img src="./images/avatar/avatar5.jpg" id="ava5" width="45" onclick="changeImg(5)"></td>
                                    
                                        <td><img src="./images/avatar/avatar6.jpg" id="ava6" width="45" onclick="changeImg(6)"></td>
                                    </tr>
                                </table>
                                <div class="form-inline col-md-10 col-sm-9 col-xs-12">
                                    <input type="file" name = "image" class="file-uploader pull-left">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label">User Name</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" name = "username" class="form-control" value=<?php   echo "" .$data ["username"] ;?>>
                                </div>
                            </div>
        
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label">Fullname</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" name = "fullname" class="form-control" value=<?php   echo "" .$data ["fullname"] ;?>>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label">Password</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" name = "password" class="form-control" value=<?php   echo "" .$data ["password"] ;?>>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="fieldset">
                            <h3 class="fieldset-title">Contact Info</h3>
                            <div class="form-group">
                                <label class="col-md-2  col-sm-3 col-xs-12 control-label">Email</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="email" name = "email"  class="form-control" value=<?php   echo "" .$data ["email"] ;?>>
                                    <p class="help-block">This is the email </p>
                                </div>
                            </div>
                        </fieldset>
                        <hr>
                        <div class="form-group">
                            <div class="col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0">
                                <input class="btn btn-primary" type="submit" value="Update Profile">
                                <input class="btn btn-secondary" type = "submit" value="Cancle">
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
 
                $("#ava2").dblclick(function(){
                  $("body").css("backgroundColor","aee1e1");
                });

                $("#ava4").dblclick(function(){
                  $("select").css("backgroundColor","fcd1d1");
                  $("input").css("backgroundColor","fcd1d1");
                });

                $("#ava5").mouseover(function(){
                  $("select").hide();
                  $("input").hide();
                });

                $("#ava6").mouseout(function(){
                  $("select").show();
                  $("input").show();
                });

});
            </script>
</html>
