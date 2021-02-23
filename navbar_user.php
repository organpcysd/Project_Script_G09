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
            <img src="./images/avatar/avatar1.png" id="ava1" width="45" onclick="changeImg(1)">
            <img src="./images/avatar/avatar2.png" id="ava2" width="45" onclick="changeImg(2)">
            <img src="./images/avatar/avatar3.png" id="ava3" width="45" onclick="changeImg(3)">
            <img src="./images/avatar/avatar4.png" id="ava4" width="45" onclick="changeImg(4)">
            <img src="./images/avatar/avatar5.png" id="ava5" width="45" onclick="changeImg(5)">
            <img src="./images/avatar/avatar6.png" id="ava6" width="45" onclick="changeImg(6)">
            <a href="edit_profile.php" class="btn btn-outline-primary btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
  <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
</svg> จัดการบัญชี</a>
            <a href="logout.php" class="btn btn-danger btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
  <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
  <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"/>
</svg>ออกจากระบบ</a>
          </div>
        </div>
    </nav>
    <script>
              $(document).ready(function(){
                $("#ava1").click(function(){
                   $("body").css("backgroundColor","#fcd1d1");
                });
 
                $("#ava2").click(function(){
                  $("body").css("backgroundColor","#aee1e1");
                });
                
                $("#ava3").click(function(){
                    $("body").css("backgroundColor","#FFC478");
                });

                $("#ava4").click(function(){
                   $("body").css("backgroundColor","#1687a7");
                });

                $("#ava5").click(function(){
                   $("body").css("backgroundColor","#c9cbff");
                });

                $("#ava6").click(function(){
                   $("body").css("backgroundColor","#c5d7bd");
                });

});
            </script>