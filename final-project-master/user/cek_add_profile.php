<?php 
include '../login/koneksi.php';

// oop for text
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
$berhasil = new login();
$gagal = new login();
$link = new login();
$berhasil -> setname('Data Sukses Ditambahkan');
$gagal -> setname('Data Gagal Ditambahkan');
$link -> setname('<a href="profile.php"> Kembali </a>');


    $sumbit = $_POST['submit'];
    $nama_lengkap = $_POST['namalengkap'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];

    if (isset($nama_lengkap, $email, $alamat, $nohp)){
        // echo "variable ini ada, tidak null <br>";
        $sql = "insert into profile (nama_lengkap, email, alamat, nohp) values('$nama_lengkap', '$email', '$alamat', '$nohp')";
    }


if (mysqli_query($connect, $sql)) {
    echo $berhasil -> getname();
    echo "<br>";
    echo $link -> getname();
} else {
    echo $gagal -> getname();
}
?>