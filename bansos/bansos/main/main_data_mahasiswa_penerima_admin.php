<!doctype html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" >
    <title>
    </title>
  </head>
  <body>
  <?php 
		$connect= mysqli_connect("localhost", "root", "", "bansos_db1");
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
<?php
            $sql = mysqli_query($connect,"select * from mahasiswa");
			while($d = mysqli_fetch_array($sql)){
			?>
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
     <tr>
    <td><button type="button" class="btn btn-primary btn-rounded" ><a class="hapus" class="btn btn-link" style="color: #ffffff;" href="../proses/proses_hapus_mahasiswa_admin.php?nim=<?php echo $d['nim']; ?>">Hapus</a></button></td>	
    <td><button type="button" class="btn btn-primary btn-rounded" ><a class="edit" class="btn btn-link" style="color: #ffffff;" href="../index/idx_edit_admin.php?nim=<?php echo $d['nim']; ?>">Edit</a></button>	
    <button type="button" class="btn btn-primary btn-rounded" ><a class="cetak" class="btn btn-link" style="color: #ffffff;" href="../main/main_cetak_mahasiswa_admin.php?nim=<?php echo $d['nim']; ?>" target="_blank">Cetak</a></button></td>
		<tbody>

     <?php
    }
    ?>   
  </table>
  <script src="../assets/js/jquery.js"></script> 
	<script src="../assets/js/popper.js"></script> 
	<script src="../assets/js/bootstrap.js"></script>
  </body>
</html>