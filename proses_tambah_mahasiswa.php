<?php
if($_POST){
	$nama=$_POST['nama'];
	$tanggal_lahir=$_POST['tanggal_lahir'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$alamat=$_POST['alamat'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$id_jurusan=$_POST['id_jurusan'];
	if(empty($nama)){
		echo "<script>alert('Nama Mahasiswa tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";

	} elseif (empty($username)){
		echo "<script>alert('username tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";
	} elseif (empty($password)){
		echo "<script>alert('password tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";	
	} else {
		include "koneksi.php";
		$insert=mysqli_query($conn,"insert into mahasiswa (nama,tanggal_lahir, jenis_kelamin, alamat, username, password, id_jurusan)  value ('".$nama."','".$tanggal_lahir."','".$jenis_kelamin."','".$alamat."','".$username."','".($password)."','".$id_jurusan."')") or die(mysqli_error($conn));
		if($insert){
				echo "<script>alert('Sukses menambahkan mahasiswa');location.href='tampil_mahasiswa.php';</script>";
		} else {
				echo "<script>alert('Gagal menambahkan mahasiswa');location.href='tambah_mahasiswa.php';</script>";
		}
	}
}
?>