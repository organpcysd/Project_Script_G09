<?php
	include("header.php");
?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-top">
                Home
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar Login,Register -->
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" id="login" href="#">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" id="register" href="#">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

          <!-- The Modal -->
  <div class="modal fade" id="Login_Modal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">เข้าสู่ระบบ</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <?php
          include("login.php");
          ?>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<script>
$(document).ready(function(){
  $("#login").click(function(){
    $("#Login_Modal").modal();
  });
});
</script>

          <!-- The Modal -->
          <div class="modal fade" id="register_Modal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <?php
          include("login.php");
          ?>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<script>
$(document).ready(function(){
  $("#register").click(function(){
    $("#register_Modal").modal();
  });
});
</script>