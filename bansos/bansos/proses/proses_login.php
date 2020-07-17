<?php
session_start();

include "koneksi.php";

$username =mysqli_real_escape_string($kon,$_POST["username"]);
$p =mysqli_real_escape_string($kon,$_POST["password"]);
$pass_md5= md5($password);

$sql = "select * from login where username='".$username."' and password='".$p."' limit 1";
$hasil = mysqli_query ($kon,$sql);
$jumlah = mysqli_num_rows($hasil);

	if ($jumlah>0) {
		$row = mysqli_fetch_assoc($hasil);
		
		if($row['level']=="puskesmas"){
		$_SESSION["id"]=$row["id"];
		$_SESSION["nama"]=$row["nama"];
		$_SESSION["username"]=$row["username"];
		$_SESSION["password"]=$row["password"];
		$_SESSION["level"]=$row["level"];
		header("Location:../index/idx_halaman_user_puskesmas.php");
		
	}else if($row['level']=="admin"){
		$_SESSION["id"]=$row["id"];
		$_SESSION["nama"]=$row["nama"];
		$_SESSION["username"]=$row["username"];
		$_SESSION["password"]=$row["password"];
		$_SESSION["level"]=$row["level"];
		header("Location:../index/idx_halaman_awal_admin.php");

	}else if($row['level']=="mahasiswa"){
		$_SESSION["id"]=$row["id"];
		$_SESSION["nama"]=$row["nama"];
		$_SESSION["username"]=$row["username"];
		$_SESSION["password"]=$row["password"];
		$_SESSION["level"]=$row["level"];
		header("Location:../index/idx_halaman_user_mahasiswa.php");
	
	}else if($row['level']=="masyarakat"){
		$_SESSION["id"]=$row["id"];
		$_SESSION["nama"]=$row["nama"];
		$_SESSION["username"]=$row["username"];
		$_SESSION["password"]=$row["password"];
		$_SESSION["level"]=$row["level"];
		header("Location:../index/idx_halaman_user_masyarakat.php");	
	}else {
		echo "Username atau password salah <br><a href='../main/main_login.php'>Kembali</a>";
	}
}else{
	echo "Username atau password salah <br><a href='../main/main_login.php'>Kembali</a>";
}
?>