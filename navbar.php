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
          <table align="Center">
                                    <tr>
                                    
                                        <td><img src="./images/avatar/avatar1.png" id="ava1" width="45" onclick="changeImg(1)"></td>
                                    
                                        <td><img src="./images/avatar/avatar2.png" id="ava2" width="45" onclick="changeImg(2)"></td>
                                    
                                        <td><img src="./images/avatar/avatar3.png" id="ava3" width="45" onclick="changeImg(3)"></td>
                                    
                                        <td><img src="./images/avatar/avatar4.png" id="ava4" width="45" onclick="changeImg(4)"></td>
                                    
                                        <td><img src="./images/avatar/avatar5.png" id="ava5" width="45" onclick="changeImg(5)"></td>
                                    
                                        <td><img src="./images/avatar/avatar6.png" id="ava6" width="45" onclick="changeImg(6)"></td>
                                    </tr>
                                </table>
            <a href="login.php" class="btn btn-success btn-sm">เข้าสู่ระบบ</a>
            <a href="register.php" class="btn btn-outline-success btn-sm">สมัครสมาชิก</a>
          </div>
        </div>
    </nav>
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
                   $("body").css("backgroundColor","c5d7bd");
                });

});
            </script>