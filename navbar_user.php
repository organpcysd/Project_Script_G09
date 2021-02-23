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
            <a href="edit_profile.php" class="btn btn-outline-primary btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
  <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
</svg> จัดการบัญชี</a>
            <a href="logout.php" class="btn btn-danger btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg>  ออกจากระบบ</a>
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