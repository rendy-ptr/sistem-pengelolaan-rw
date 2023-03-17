<?php 
session_start();
include '../../login/koneksi.php';

    //   var_dump($_SESSION) ; 
      if (!empty($_SESSION)) { //if (isset($_SESSION)) {};
        $user_profile = $_SESSION['email'];
      }
      $sql_user = mysqli_query($connect, "SELECT * from januari where nama_keluarga='$user_profile'");
      $data_user = mysqli_fetch_array($sql_user);
    //   var_dump($data_user);

    $sumbit = $_POST['submit'];
    $pembayaran = $_POST['pembayaran'];



      // JIKA JANUARI
    if (isset($pembayaran)){
        echo "variable ini ada, tidak null <br>";
        $sql = "UPDATE januari SET total_bayar = '$pembayaran[0]' WHERE nama_keluarga='$user_profile'";
    }


if (mysqli_query($connect, $sql)) {
    echo " Data Berhasil Ditambahkan";
} else {
    echo " Gagal Ditambahkan ";
}
?>