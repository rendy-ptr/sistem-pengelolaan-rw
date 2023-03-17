<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$email = $_POST['email'];
$password = $_POST['password'];
$err = '';
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($connect,"select * from admin where email='$email' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// oop if = else
class login {
	public $text;

	// function untuk set name
	function setname($text) {
		$this -> text = $text;
	}
	// function untuk get name
	function getname() {
		return $this -> text;
	}
}
$kalimat = new login();
$link = new login();
$kalimat -> setname('Email Atau Pasword Tidak Sesuai <br> Harap Login Kembali');
$link -> setname('<a href="login.php"> Kembali </a>');

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);
	// var_dump($data['level']); die;

	// cek jika user login sebagai admin
	if($data['level']=="admin"){
		
		// buat session login dan username
		$_SESSION['admin'] = $data['id'];
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location: ../admin/home.php");
 
	// cek jika user login sebagai user
	}else if($data['level']=="user"){
		// buat session login dan username
		$_SESSION['user'] = $data['id'];
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "user";
		// alihkan ke halaman dashboard user
		header("location: ../user/home_user.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		$err = "<script>alert('data tidak sesuai')</script>";
        echo $err;
        echo $link -> getname();
	}	
}else{
	$err = "<script>alert('email atau password tidak sesuai')</script>";
    echo $err;
    echo $kalimat -> getname();
	echo "<br>";
    echo $link -> getname();
}
 
?>