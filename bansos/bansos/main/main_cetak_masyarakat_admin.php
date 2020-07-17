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
	$id = $_GET['id'];
  $data = mysqli_query($connect,"SELECT * FROM masyarakat WHERE id='$id'")or die(mysql_error());
	while($d = mysqli_fetch_array($data)){
	?>
  
	<table border="1" style="width: 100%">
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
		<?php 
		}
		?>
	</table>
	<script>
		window.print();
	</script>
 
</body>
</html>