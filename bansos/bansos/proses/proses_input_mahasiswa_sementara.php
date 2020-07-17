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
$query="INSERT INTO mahasiswa_sementara SET nim='$nim', nama_mahasiswa='$nama_mahasiswa', universitas='$universitas', alamat='$alamat', email='$email', no_hp='$nohp', bantuan_logistik='$bantuan_logistik', 
bantuan_kuota='$bantuan_kuota', bantuan_hs='$bantuan_hs', tanggal='$tanggal', status='$status'";
if (mysqli_query($connect, $query)) {
    echo "<script>alert('Data Bansos Berhasil Dimasukan, Data Akan DIverivikasi Terlebih Dahulu ');document.location='../index/idx_halaman_user_mahasiswa.php'</script>";
}
else {
echo "Gagal Input";
}
?>