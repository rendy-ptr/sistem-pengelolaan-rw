<?php

  // include 'database.php';

  // error_reporting(0);

  // session_start();

  // if (isset($_SESSION['username'])) {
  //   header("Location: anggota.php");
  // }

  // if (isset($_POST['login'])) {
  //   $email = $_POST['email'];
  //   $password = md5($_POST['password']);

  //   $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
  //   $result = mysqli_query($connect, $sql);
  //   if ($result -> num_rows > 0) {
  //     $row = mysqli_fetch_assoc($result);
  //     $_SESSION['username'] = $row['email'];
  //     header("Location: anggota.php");
  //   } else {
  //     echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
  //   }
  // }
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & SignUp Form </title>
  <link rel="stylesheet" href="../css/login.css">
</head>

<body>
  <div class="wrapper">
    <div class="title-text">
      <div class="title login">Login Form</div>
      <div class="title signup">Signup Form</div>
    </div>

    <!-- Start Form Container -->
    <div class="form-container">
      <div class="slide-controls">
        <input type="radio" name="slider" id="login" checked>
        <input type="radio" name="slider" id="signup">
        <label for="login" class="slide login">Login</label>
        <label for="signup" class="slide signup">Register</label>
        <div class="slide-tab"></div>
      </div>


      <div class="form-inner">

<?php
// session_start();
// include 'koneksi.php';
//     $err = "";
//     $email = "";

//     if (isset($_POST['login'])) {
//       $email = $_POST['email'];
//       $password = $_POST['password'];

//       if ($email == '' or $password == '') {
//         $err = "<script>alert('silahkan masukan username dan password')</script>";
//       } else {
//         $sql1 = "select * from user15 where email = '$email'";
//         $q1 = mysqli_query($connect, $sql1);
//         $r1 = mysqli_fetch_array($q1);
//         $r2 = isset($r1['email']) ? $r1['email'] : '';


//         if ($r2 == '') {
//           $err = "<script>alert('email tidak tersedia')</script>"; 
//         } else if ($r1['password'] != md5($password)){
//           $err = "<script>alert('password tidak sesuai')</script>";
//         } 

//         if (empty($err)) {
//           $_SESSION['session_username'] = $email;
//           $_SESSION['session_password'] = md5($password);
//           header("location: ../user/home_user.php");
//         }
//       }
//     }

?>
<?php 
// if ($err) {
//   echo $err;
// }
?>
        <!-- Start Login Form -->
        <form method="POST" action="cek_login.php" class="login">
          <div class="field">
            <input type="text" name="email" placeholder="Email Address" required>
          </div>
          <div class="field">
            <input type="password" name="password" placeholder="Password" required>
          </div>
          <div class="pass-link">
            <a href="#">
              Lupa password?
            </a>
          </div>
          <div class="field">
            <input type="submit" name="login" value="Login" class="submit">
          </div>
          <div class="signup-link">
            Bukan member? <a href="#">Daftar sekarang</a>
          </div>
        </form>

<?php 
 
 include 'koneksi.php';
  
 error_reporting(0);
  
 session_start();
  
 if (isset($_SESSION['username'])) {
     header("Location: login.php");
 }
  
 if (isset($_POST['simpan'])) {
     $username = $_POST['username'];
     $email = $_POST['email'];
     $password = ($_POST['password']);
     $cpassword = ($_POST['cpassword']);
  
     if ($password == $cpassword) {
         $sql = "SELECT * FROM admin WHERE email='$email'";
         $result = mysqli_query($connect, $sql);
         if (!$result->num_rows > 0) {
             $sql = "INSERT INTO admin (username, email, password, level)
                     VALUES ('$username', '$email', '$password', 'user')";
             $result = mysqli_query($connect, $sql);
             if ($result) {
                 echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                 $username = "";
                 $email = "";
                 $_POST['password'] = "";
                 $_POST['cpassword'] = "";
             } else {
                 echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
             }
         } else {
             echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
         }
          
     } else {
         echo "<script>alert('Password Tidak Sesuai')</script>";
     }
 }
  
 ?>

        <!-- Start Signup Form -->
        <form method="POST" action="" class="signup">
          <div class="field">
            <input type="text" name="username" placeholder="Nama" required>
          </div>
          <div class="field">
            <input type="text" name="email" placeholder="Email Address" required>
          </div>
          <div class="field">
            <input type="password" name="password" placeholder="Password" required>
          </div>
          <div class="field">
            <input type="password" name="cpassword" placeholder="Confirm Password" required>
          </div>
          <div class="field">
              <input type="submit" name="simpan" value="Signup" class="submit">
            </div>
            
        </form>
      </div>
    </div>
  </div>
  <script src="../js/login.js"></script>
</body>

</html>