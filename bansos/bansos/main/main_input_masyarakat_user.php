<?php
include "../proses/koneksi.php";

if (!isset($_SESSION["username"])) {
	echo "Anda harus login dulu <br><a href='../main/main_login.php'>Klik disini</a>";
	exit;
}

$id=$_SESSION["id"];

?>
<!doctype html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" >
    <title>
    </title>
  </head>
  <body>
  <div class="card">
  <div class="card-body">

  <!-- Extended default form grid -->
<form action="../proses/proses_input_masyarakat_sementara.php" method="post">
  <!-- Grid row -->
  <?php 
  $connect= mysqli_connect("localhost", "root", "", "bansos_db");
	$id = $_SESSION["id"];
  $data = mysqli_query($connect,"SELECT * FROM login WHERE id='$id'")or die(mysql_error());
	while($d = mysqli_fetch_array($data)){
	?>
  <div class="form-row">
  <!-- Default input -->
  <div class="form-group col-md-1">
      <label>id</label>
      <input type="text" class="form-control" id="id" placeholder="Masukan Id" name="id" readonly value="<?php echo $d['id'] ?>">
    </div>
    <!-- Default input -->
    <div class="form-group col-md-2">
      <label >Kelurahan</label>
      <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Masukan Kelurahan">
    </div>
    <!-- Default input -->
    <div class="form-group col-md-3">
      <label >kecamatan</label>
      <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Masukan kecamatan">
    </div>
  </div>
    <!-- Grid row -->
    <div class="form-row">
    <!-- Default input -->
    <div class="form-group col-md-1">
      <label>RT</label>
      <input type="text" class="form-control" id="rt" placeholder="RT" name="rt">
    </div>
    <!-- Default input -->
    <div class="form-group col-md-1">
      <label>RW</label>
      <input type="text" class="form-control" id="rw" placeholder="RW" name="rw">
    </div>
    <!-- Default input -->
    <div class="form-group col-md-3">
      <label >Kota</label>
      <input type="text" class="form-control" id="kota" name="kota" placeholder="Masukan Kota">
    </div>
    </div>
    <!-- Grid row -->
    <div class="form-row">
    <!-- Default input -->
    <div class="form-group col-md-2">
      <label>Email</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Masukan email">
    </div>
    <div class="form-group col-md-3">
      <label>No.HP</label>
      <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Masukan No.HP">
    </div>
    </div>
 <!-- Grid row -->
 <div class="form-row">
    <!-- Default input -->
    <div class="form-group col-md-2">
      <label>Bantuan Sembako</label>
      <input type="text" class="form-control" id="bantuanapd" name="bantuansembako" placeholder="Masukan Jumlah Sembako">
    </div>
    <div class="form-group col-md-3">
      <label>Bantuan Hand Sanitizer</label>
      <input type="text" class="form-control" id="bantuanhs" name="bantuanhs" placeholder="Masukan Jumlah HS">
    </div>
    <!-- Default input --> 
 <div class="form-group col-md-3">
      <label>Tanggal</label>
      <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Masukan Tanggal">
      <input type="hidden" name="status" value="Dalam Proses Verifikasi Data"/>
    </div>
    </div>
  <button type="submit" class="btn btn-primary btn-md" name="submit">Kirim</button>
</form>
  <?php } ?>
<!-- Extended default form grid -->
  </div>
  </div><script src="../assets/js/jquery.js"></script> 
	<script src="../assets/js/popper.js"></script> 
	<script src="../assets/js/bootstrap.js"></script>
  </body>
</html>