<?php
	include("header.php");
?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-top">
                Home
            </a>
            <!-- Navbar Login,Register -->
            <form class="d-flex">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <a class="nav-link active" aria-current="page" id="login" href="login.php">Log in</a>
                        <button class="btn btn-outline-success" type="submit" id="login" href="login">Log in</button>
                        <a class="nav-link active" aria-current="page" id="register" href="register.php">Register</a>
                </ul>
            </form>
            </div>
        </div>
    </nav>