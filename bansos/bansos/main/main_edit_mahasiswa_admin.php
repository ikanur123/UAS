<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
    </title>
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" >
  <script src="../assets/js/jquery.js"></script> 
	<script src="../assets/js/popper.js"></script> 
	<script src="../assets/js/bootstrap.js"></script>
  </head>
  <body>
  <?php 
  $connect= mysqli_connect("localhost", "root", "", "bansos_db");
	$nim = $_GET['nim'];
  $data = mysqli_query($connect,"SELECT * FROM mahasiswa WHERE nim='$nim'")or die(mysql_error());
	while($d = mysqli_fetch_array($data)){
	?>
  <div class="card">
  <div class="card-body">

  <!-- Extended default form grid -->
<form action="../proses/proses_edit_mahasiswa.php" method="post">
<div class="form-row">
  <!-- Default input -->
  <div class="form-group col-md-1">
      <label>NIM</label>
      <input type="text" class="form-control" id="nim" placeholder="NIM" name="nim" readonly value="<?php echo $d['nim'] ?>">
    </div>
    <!-- Default input -->
    <div class="form-group col-md-2">
      <label>Nama Mahasiswa</label>
      <input type="text" class="form-control" id="namamahasiswa" placeholder="Masukan Nama" name="namamahasiswa"  value="<?php echo $d['nama_mahasiswa'] ?>">
    </div>
   <!-- Default input -->
   <div class="form-group col-md-2">
      <label >Universitas</label>
      <input type="text" class="form-control" id="universitas" name="universitas" placeholder="Masukan Universitas"  value="<?php echo $d['universitas'] ?>">
    </div>
  </div>
    <!-- Grid row -->
    <div class="form-row">
     <!-- Default input -->
     <div class="form-group col-md-4">
      <label>Alamat</label>
      <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" name="alamat"  value="<?php echo $d['alamat'] ?>">
    </div>
    <!-- Default input -->
    <div class="form-group col-md-2">
      <label>Email</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Masukan email"  value="<?php echo $d['email'] ?>">
    </div>
    <div class="form-group col-md-3">
      <label>No.HP</label>
      <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Masukan No.HP"  value="<?php echo $d['no_hp'] ?>">
    </div>
    </div>
    <!-- Grid row -->
    <div class="form-row">
    <!-- Default input -->
    <div class="form-group col-md-2">
      <label>Bantuan Logistik</label>
      <input type="text" class="form-control" id="bantuanlogistik" name="bantuanlogistik" placeholder="Masukan Logistik"  value="<?php echo $d['bantuan_logistik'] ?>">
    </div>
    <div class="form-group col-md-3">
      <label>Bantuan Kuota</label>
      <input type="text" class="form-control" id="bantuankuota" name="bantuankuota" placeholder="Masukan Kuota"  value="<?php echo $d['bantuan_kuota'] ?>">
    </div>
    <div class="form-group col-md-3">
      <label>Bantuan Hand Sanitizer</label>
      <input type="text" class="form-control" id="bantuanhs" name="bantuanhs" placeholder="Masukan Hand Sanitizer "  value="<?php echo $d['bantuan_hs'] ?>">
    </div>
    </div>
 <!-- Grid row -->
 <div class="form-row">
    <!-- Default input -->
    <div class="form-group col-md-2">
      <label>Tanggal</label>
      <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Masukan Tanggal"  value="<?php echo $d['tanggal'] ?>">
      <input type="hidden" name="status" value="Data telah Terverifikasi"/>
    </div>
    </div>
  <button type="submit" class="btn btn-primary btn-md" name="submit">edit</button>
</form>
    <?php } ?>
<!-- Extended default form grid -->
  </div>
  </body>
</html>