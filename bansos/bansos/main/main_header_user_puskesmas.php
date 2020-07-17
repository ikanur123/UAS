<?php
session_start();

include "../proses/koneksi.php";

if (!isset($_SESSION["username"])) {
	echo "Anda harus login dulu <br><a href='../main/main_login.php'>Klik disini</a>";
	exit;
}

$Nama=$_SESSION["nama"];

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../img/5.png"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" >
    <title>BanSos</title>
  </head>
  <body>
  <div >
<nav class="navbar navbar-expand-lg navbar-dark primary-color" style="background-color: #46c46a;">
    <a class="navbar-brand" href="#">Bantuan Sosial Covid 19</a>
  </nav>
</div>

  <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color" style="background-color: #46c46a;">

<!-- Navbar brand -->
<a class="navbar-brand" href="#">BanSos</a>

<!-- Collapse button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="basicExampleNav">

  <!-- Links -->
  <ul class="navbar-nav mr-auto">
    <li class="nav-item ">
      <a class="nav-link" href="../index/idx_halaman_user_puskesmas.php">Rumah
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../index/idx_halaman_user_puskesmas.php?input" class="input">Input Data</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../index/idx_halaman_user_puskesmas.php?status" class="status">Status</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../index/idx_halaman_user_puskesmas.php?data" class="data">Data</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../proses/logout.php">Logout</a>
    </li>
  </ul>
  
</div>
<!-- Collapsible content -->

</nav>
<!--/.Navbar-->
  <script src="../assets/js/jquery.js"></script> 
	<script src="../assets/js/popper.js"></script> 
	<script src="../assets/js/bootstrap.js"></script>
  </body>
</html>