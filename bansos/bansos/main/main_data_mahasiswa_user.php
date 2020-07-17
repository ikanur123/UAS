<?php

include "../proses/koneksi.php";

if (!isset($_SESSION["username"])) {
	echo "Anda harus login dulu <br><a href='../main/main_login.php'>Klik disini</a>";
	exit;
}


$id=$_SESSION["id"];

?>

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
           if(!isset($_SESSION["id"] )){
            echo "<font color='red'>Red without code</font><br>";
			}else{
                $nim = $_SESSION["id"];
				$sql = mysqli_query($kon,"select * from mahasiswa where nim='$nim'");
                
			}
			while($d = mysqli_fetch_array($sql)){
			?>
 <table class="table table-striped table-responsive-md btn-table">
  <thead>
  <tr>
  <th>nim</th>
      <th>nama_mahasiswa</th>
      <th>universitas</th>
      <th>alamat</th>
      <th>email</th>
      <th>no_hp</th>
      <th>bantuan_logistik</th>
      <th>bantuan_kuota</th>
      <th>bantuan_hs</th>
      <th>tanggal</th>
      <th>status</th>
    </tr>
</thead>
      <tbody>
      <tr> 
      <td><?php echo $d['nim']; ?></td>
		<td><?php echo $d['nama_mahasiswa']; ?></td>
		<td><?php echo $d['universitas']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
        <td><?php echo $d['email']; ?></td>
		<td><?php echo $d['no_hp']; ?></td>
		<td><?php echo $d['bantuan_logistik']; ?></td>
        <td><?php echo $d['bantuan_kuota']; ?></td>
        <td><?php echo $d['bantuan_hs']; ?></td>
        <td><?php echo $d['tanggal']; ?></td>
        <td><?php echo $d['status']; ?></td>
 </tr>
      <tbody><?php
            }
            ?>
  </body>
</html>