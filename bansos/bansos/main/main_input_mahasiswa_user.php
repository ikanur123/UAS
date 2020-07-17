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
<form action="../proses/proses_input_mahasiswa_sementara.php" method="post">
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
      <label>NIM</label>
      <input type="text" class="form-control" id="nim" placeholder="NIM" name="nim" readonly value="<?php echo $d['id'] ?>">
    </div>
    <!-- Default input -->
    <div class="form-group col-md-2">
      <label>Nama Mahasiswa</label>
      <input type="text" class="form-control" id="namamahasiswa" placeholder="Masukan Nama" name="namamahasiswa">
    </div>
   <!-- Default input -->
   <div class="form-group col-md-2">
      <label >Universitas</label>
      <input type="text" class="form-control" id="universitas" name="universitas" placeholder="Masukan Universitas">
    </div>
  </div>
    <!-- Grid row -->
    <div class="form-row">
     <!-- Default input -->
     <div class="form-group col-md-4">
      <label>Alamat</label>
      <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" name="alamat">
    </div>
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
      <label>Bantuan Logistik</label>
      <input type="text" class="form-control" id="bantuanlogistik" name="bantuanlogistik" placeholder="Masukan Logistik">
    </div>
    <div class="form-group col-md-3">
      <label>Bantuan Kuota</label>
      <input type="text" class="form-control" id="bantuankuota" name="bantuankuota" placeholder="Masukan Kuota">
    </div>
    <div class="form-group col-md-3">
      <label>Bantuan Hand Sanitizer</label>
      <input type="text" class="form-control" id="bantuanhs" name="bantuanhs" placeholder="Masukan Hand Sanitizer ">
    </div>
    </div>
 <!-- Grid row -->
 <div class="form-row">
    <!-- Default input -->
    <div class="form-group col-md-2">
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