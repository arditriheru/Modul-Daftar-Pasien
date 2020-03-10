<?php 
// menghubungkan dengan koneksi
include '../koneksi.php';
// menangkap data yang dikirim dari form
$nama_user = $_POST['nama_user'];
$password = $_POST['password'];
// menyeleksi data admin dengan username dan password yang sesuai
$admin = mysqli_query($koneksi,"SELECT * FROM psdi_petugas WHERE nama_user='$nama_user' AND password='$password'");
$data=mysqli_fetch_assoc($admin);
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($admin);
if($cek > 0){
	// mengaktifkan session php
	session_start();
		$_SESSION['id_petugas']=$data['id_petugas'];
		$_SESSION['id_unit']=$data['id_unit'];
		$_SESSION['nama']=$data['nama'];
		$_SESSION['nama_user'] = "$nama_user";
		$_SESSION['status'] = "login";
		header("location:rm-tambah");
}else{
	header("location:login?pesan=gagal");
}
?>