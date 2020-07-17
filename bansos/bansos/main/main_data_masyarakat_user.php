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
                $id = $_SESSION["id"];
				$sql = mysqli_query($kon,"select * from masyarakat where id='$id'");
                
			}
			while($d = mysqli_fetch_array($sql)){
			?>
 <table class="table table-striped table-responsive-md btn-table">
  <thead>
  <tr>
  <th>Id</th>
      <th>Kelurahan</th>
      <th>Kecamatan</th>
      <th>RT</th>
      <th>RW</th>
      <th>Kota</th>
      <th>Email</th>
      <th>No.HP</th>
      <th>Bantuan Sembako</th>
      <th>Bantuan HS</th>
      <th>Tanggal</th>
      <th>Status</th>
    </tr>
</thead>
      <tbody>
      <tr> 
      <td><?php echo $d['id']; ?></td>
          <td><?php echo $d['kelurahan']; ?></td>
          <td><?php echo $d['kecamatan']; ?></td>
          <td><?php echo $d['rt']; ?></td>
          <td><?php echo $d['rw']; ?></td>
          <td><?php echo $d['kota']; ?></td>
          <td><?php echo $d['email']; ?></td>
          <td><?php echo $d['no_hp']; ?></td>
          <td><?php echo $d['bantuan_sembako']; ?></td>
          <td><?php echo $d['bantuan_hs']; ?></td>
          <td><?php echo $d['tanggal']; ?></td>
          <td><?php echo $d['status']; ?></td>
 </tr>
      <tbody><?php
            }
            ?>
  </body>
</html>