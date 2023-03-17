<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

  <!--Font Awesome-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

  <!--CSS Link-->
  <link rel="stylesheet" href="../css/user.css">

  </head>
<body>
 <!--Header-->
  <header class="header">
    <section class="wrap-header">
      <a href="home_user.php" class="logo">RW/08.</a>

      <form action="" method="post" class="search-form">
        <input type="text" name="search-box" class="search-box" placeholder="search..." 
        required maxlength="100">
        <button  type="submit" class="fas fa-search" name="search-box" >
        </button>
      </form>

      <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-user" id="user-btn"></div>
        <div class="fas fa-sun" id="toggle-btn"></div>
      </div>

      <div class="profile">
        <img src="../images/pic-1.jpg" alt="">
        <?php 
        include "../login/koneksi.php";
        // var_dump($_SESSION) ; 
        if (!empty($_SESSION)) { //if (isset($_SESSION)) {};
          $user_login = $_SESSION['user'];
        }
        $sql_user = mysqli_query($connect, "SELECT * from admin where id='$user_login'");
        $data_user = mysqli_fetch_array($sql_user);
        ?>
        <h3>
          <?php 
          echo $data_user['username'] ; 
          ?>
        </h3>
        <span>User</span>
        <a href="profile.php" class="btn">View Profile</a>
        <a href="../login/logout.php" class="option-btn">Logout</a>
  </div>

    </section>
  </header>

 <!-- End Header-->

 <!-- Start Side Bar-->
 <div class="side-bar">

  <div class="close-side-bar">
    <i class="fas fa-times"></i>
  </div>


  <div class="profile">
    <img src="../images/pic-1.jpg" alt="">
    <?php 
        include "../login/koneksi.php";
        // var_dump($_SESSION) ; 
        if (!empty($_SESSION)) { //if (isset($_SESSION)) {};
          $user_login = $_SESSION['user'];
        }
        $sql_user = mysqli_query($connect, "SELECT * from admin where id='$user_login'");
        $data_user = mysqli_fetch_array($sql_user);
    ?>
      <h3>
          <?php 
          echo $data_user['username'] ; 
          ?>
      </h3>
    <span>User</span>
    <a href="profile.php" class="btn">View Profile</a>
    <a href="../login/logout.php" class="option-btn">Logout</a>
  </div>

  <nav class="navbar">
    <a href="home_user.php"><i class="fas fa-home"></i><span>Home</span></a>
    <!-- <a href="kas.html"><i class="fa-solid fa-hand-holding-dollar"></i><span>Kas</span></a> -->
    <a href="iuran_user.php"><i class="fas fa-money-check"></i><span>Iuran</span></a>
    <!-- <a href="event.html"><i class="fa-solid fa-calendar-check"></i><span>Event</span></a> -->
    <a href="about-us_user.php"><i class="fa-solid fa-question-circle"></i><span>About Us</span></a>
    <!-- <a href="contact.html"><i class="fa-solid fa-address-book"></i><span>Contact</span></a> -->
    <!-- <a href="data-penduduk.html"><i class="fa-solid fa-file"></i><span>Data Penduduk</span></a> -->
  </nav>
 </div>
 <!-- End Side Bar-->

 <!-- Isi Home -->
 <section class="judul">

  <h1 class="heading">INFO ACARA</h1>

  <div class="box-home">
    <div class="img-home">
      <img class="info-vaksin" src="../images/info-vaksin.png" alt="info ronda">
    </div>
    
    <div class="info-jadwal">
      
      <h2 class="h2-info-jadwal">Info & Jadwal</h2>
      
      <div class="file-info">
        <a class="file-jadwal" href="">Jadwal Vaksinasi Booster 2022.pdf (10-01-2022)</a>
        <a class="file-jadwal" href="">Jadwal Pemilu Bupati 2022.pdf (10-01-2022)</a>
        <a class="file-jadwal" href="">Jadwal Posyandu 2022.pdf (10-01-2022)</a>
        <a class="file-jadwal" href="">Jadwal Kerja Bakti 2022.pdf (10-01-2022)</a>

      </div>
    </div>
  </div>

 </section>
 

 

 <!-- End Isi Home -->

















 <!-- Footer 
 
 <footer class="footer">

  &copy; copyright @ 2022 by <span>Muhammad Amer</span> | All Rights
  Reserved!

 </footer> 
 
  End Footer -->


  <!--Js Script-->
  <script src="../js/user.js"></script>
</body>
</html>