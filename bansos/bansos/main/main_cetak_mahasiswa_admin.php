<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT </title>
</head>
<body>
 
	<center>
 
		<h2>DATA PENERIMA BANSOS</h2>
	</center>
    <?php 
  $connect= mysqli_connect("localhost", "root", "", "bansos_db1");
	$nim = $_GET['nim'];
  $data = mysqli_query($connect,"SELECT * FROM mahasiswa WHERE nim='$nim'")or die(mysql_error());
	while($d = mysqli_fetch_array($data)){
	?>
  
	<table border="1" style="width: 100%">
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
		<?php 
		}
		?>
	</table>
	<script>
		window.print();
	</script>
 
</body>
</html>