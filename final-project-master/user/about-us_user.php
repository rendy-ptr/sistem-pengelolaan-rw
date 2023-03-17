<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>

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

      <form id="form1" name="form1" class="search-form" onsubmit="return false">
        <input type="text" id="text-to-search" class="search-box">
        <button id="searchBtn" class="fas fa-search" onclick="search();">
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

<!-- Isi About Us -->
<section class="judul">

  <h1 class="heading">About Us</h1>

  <div class="box-about-us">
    <img src="../images/warga.jpg" alt="warga">
    <div class="f-about-us">
      <p>
        Kita adalah warga rt/08 Desa Klari Kabupaten Karawang
        dengan adanya website ini semoga rt/08 warganya makin kompak lagi
        dan efektiv dalam mewujudkan pemerintahan desa yang transparan dan kompak.
      </p>
    </div>
    <div class="kontak">
      <div class="no-admin">
        <i class="fa-solid fa-phone"></i>
        <span><br> Admin Number <br></span> 
        <a class="isi-admin" href="">082125578302</a>
      </div>
    
    
      <div class="no-admin">
        <i class="fa-solid fa-envelope"></i>
        <span><br> E-mail Admin <br></span> 
        <a class="isi-admin" href="">karawang@go.id</a>  
      </div>
    
    
      <div class="no-admin">
        <i class="fa-solid fa-location-dot"></i>
        <span><br> Alamat <br></span> 
        <a class="isi-admin" href="">Klari, Karawang 45324</a>
      </div>
    
  </div>




</section>




<!-- End Isi About Us -->

















 <!-- Footer 
 <footer class="footer">

  &copy; copyright @ 2022 by <span>Muhammad Amer</span> | All Rights
  Reserved!

 </footer>
  End Footer -->


  <!--Js Script-->
  <script src="../js/script.js"></script>
  <script type="text/javascript">
    
    function search () {
        let p = document.getElementsByTagName('p')[0];
        if (p != 0) {
          let text = "";
        }
        let text = "Kita adalah warga rt/08 Desa Klari Kabupaten Karawang dengan adanya website ini semoga rt/08 warganya makin komkpak lagi dan efektiv dalam mewujudkan pemerintahan desa yang transparan dan kompak."
        let ar = text.split(" ");
        let form = document.getElementById('text-to-search').value;
        let hasil = form;

        for (let i = 0; i < ar.length; i++) {
          if (hasil != 0) {
            if (hasil == ar[i]) {
              p.innerHTML = p.textContent.replace(ar[i], match => `<mark>${match}</mark>`)
            }
          }
        }
        if (hasil == 0) {
          alert("text tidak boleh kosong")
        }
        // else if (hasil != ar[i]) {
        //   alert("not found")
        // }
      }

      
  </script>
</body>
</html>