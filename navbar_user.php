<?php
	include("header.php");
?>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            DONATE CENTER
          </a>
         <!-- Navbar Login,Register -->
          <div>
            <img src="./images/avatar/1.png" id="ava1" width="45" onclick="changeImg(1)">
            <img src="./images/avatar/2.png" id="ava2" width="45" onclick="changeImg(2)">
            <img src="./images/avatar/3.png" id="ava3" width="45" onclick="changeImg(3)">
            <img src="./images/avatar/4.png" id="ava4" width="45" onclick="changeImg(4)">
            <img src="./images/avatar/5.png" id="ava5" width="45" onclick="changeImg(5)">
            <img src="./images/avatar/6.png" id="ava6" width="45" onclick="changeImg(6)">
            <a href="edit_profile.php" class="btn btn-outline-primary btn-sm">จัดการบัญชี</a>
            <a href="logout.php" class="btn btn-danger btn-sm">ออกจากระบบ</a>
          </div>
        </div>
    </nav>
    <script>
              $(document).ready(function(){
                $("#ava1").click(function(){
                   $("body").css("backgroundColor","#fcd1d1");
                });
 
                $("#ava2").click(function(){
                  $("body").css("backgroundColor","#beebe9");
                });
                
                $("#ava3").click(function(){
                    $("body").css("backgroundColor","#FFC478");
                });

                $("#ava4").click(function(){
                   $("body").css("backgroundColor","#e57986");
                });

                $("#ava5").click(function(){
                   $("body").css("backgroundColor","#e1ccec");
                });

                $("#ava6").click(function(){
                   $("body").css("backgroundColor","#c5d7bd");
                });

});
            </script>