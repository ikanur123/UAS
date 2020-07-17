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
$query1="INSERT INTO mahasiswa SET nim='$nim', nama_mahasiswa='$nama_mahasiswa', universitas='$universitas', alamat='$alamat', email='$email', no_hp='$nohp', bantuan_logistik='$bantuan_logistik', 
bantuan_kuota='$bantuan_kuota', bantuan_hs='$bantuan_hs', tanggal='$tanggal', status='$status'";
$query2="DELETE from mahasiswa_sementara where nim='$nim'";
if (mysqli_query($connect, $query1)) {
    mysqli_query ($connect, $query2);
    echo "<script>alert('Data Telah Terverifikasi, dan Telah Masuk Ke Data mahasiswa Peneriama BanSos');document.location='../index/idx_halaman_awal_admin.php'</script>";
}
else {
echo "Gagal Input";
}

?>