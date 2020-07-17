<?php
$connect= mysqli_connect("localhost", "root", "", "bansos_db1");
// menyimpan data kedalam variabel
$nim                = $_POST['nim'];
$nama_mahasiswa     = $_POST['namamahasiswa'];
$universitas        = $_POST['universitas'];
$alamat             = $_POST['alamat'];
$email              = $_POST['email'];
$nohp               = $_POST['nohp'];
$bantuan_logistik   = $_POST['bantuanlogistik'];
$bantuan_kuota      = $_POST['bantuankuota'];
$bantuan_hs         = $_POST['bantuanhs'];
$tanggal            = $_POST['tanggal'];
$status             = $_POST['status'];

// query SQL untuk insert data
mysqli_query ($connect,"UPDATE mahasiswa SET nim='$nim', nama_mahasiswa='$nama_mahasiswa', universitas='$universitas', alamat='$alamat', email='$email', no_hp='$nohp', bantuan_logistik='$bantuan_logistik', 
bantuan_kuota='$bantuan_kuota', bantuan_hs='$bantuan_hs', tanggal='$tanggal', status='$status' WHERE nim='$nim' ");
    echo "<script>alert('Data Berhasil Diedit');document.location='../index/idx_halaman_awal_admin.php'</script>";

?>