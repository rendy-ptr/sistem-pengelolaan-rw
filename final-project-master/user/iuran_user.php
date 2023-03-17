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

 <!-- content -->
 <div class="grid">
  <div class="card">
    <div class="icon-iuran">
      <a href="fiture/iuran-kas.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" width="24" fill="currentColor"><path d="M9 13v-2a3 3 0 1 1 0-6V4a1 1 0 1 1 2 0v1h.022A2.978 2.978 0 0 1 14 7.978a1 1 0 0 1-2 0A.978.978 0 0 0 11.022 7H11v2a3 3 0 0 1 0 6v1a1 1 0 0 1-2 0v-1h-.051A2.949 2.949 0 0 1 6 12.051a1 1 0 1 1 2 0 .95.95 0 0 0 .949.949H9zm2 0a1 1 0 0 0 0-2v2zM9 7a1 1 0 1 0 0 2V7zm1 13C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16z"></path></svg><h2>Kas</h2></a>
    </div>
  </div>
  <div class="card">
    <div class="icon-iuran">
      <a href="fiture/iuran-sampah.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-3 -2 24 24" width="24" fill="currentColor"><path d="M6 2V1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h4a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-.133l-.68 10.2a3 3 0 0 1-2.993 2.8H5.826a3 3 0 0 1-2.993-2.796L2.137 7H2a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h4zm10 2H2v1h14V4zM4.141 7l.687 10.068a1 1 0 0 0 .998.932h6.368a1 1 0 0 0 .998-.934L13.862 7h-9.72zM7 8a1 1 0 0 1 1 1v7a1 1 0 0 1-2 0V9a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v7a1 1 0 0 1-2 0V9a1 1 0 0 1 1-1z"></path></svg><h2>Sampah</h2></a>
    </div>
  </div>
  <div class="card">
    <div class="icon-iuran">
      <a href="fiture/iuran_keamanan.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-4 -2 24 24" width="24" fill="currentColor"><path d="M2 4.386V8a9.02 9.02 0 0 0 3.08 6.787L8 17.342l2.92-2.555A9.019 9.019 0 0 0 14 8V4.386l-6-2.25-6 2.25zM.649 2.756L8 0l7.351 2.757a1 1 0 0 1 .649.936V8c0 3.177-1.372 6.2-3.763 8.293L8 20l-4.237-3.707A11.019 11.019 0 0 1 0 8V3.693a1 1 0 0 1 .649-.936z"></path></svg><h2>Keamanan</h2></a>
    </div>
  </div>
  <!-- <div class="card">
    <div class="icon-iuran">
      <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -5 24 24" width="24" fill="currentColor"><path d="M18 4V2H2v2h16zm0 3H2v5h16V7zM2 0h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm2 9h1a1 1 0 1 1 0 2H4a1 1 0 0 1 0-2zm5 0h5a1 1 0 0 1 0 2H9a1 1 0 0 1 0-2z"></path></svg><h2>Pembayaran</h2></a>
    </div>
  </div> -->
  <!-- <div class="card">
    <div class="icon-iuran">
      <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -3 24 24" width="24" fill="currentColor"><path d="M9 2V1a1 1 0 1 1 2 0v1h3V1a1 1 0 0 1 2 0v1h1a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3V5a3 3 0 0 1 3-3h1V1a1 1 0 1 1 2 0v1h3zm0 2H6v1a1 1 0 1 1-2 0V4H3a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1h-1v1a1 1 0 0 1-2 0V4h-3v1a1 1 0 0 1-2 0V4zM3 8h2v2H3V8zm0 4h2v2H3v-2zm12 0h2v2h-2v-2zm0-4h2v2h-2V8zM7 8h2v2H7V8zm4 0h2v2h-2V8zm0 4h2v2h-2v-2zm-4 0h2v2H7v-2z"></path></svg><h2>Kalender</h2></a>
    </div>
  </div> -->
  <!-- <div class="card">
    <div class="icon-iuran">
      <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-5 -2 24 24" width="24" fill="currentColor"><path d="M5 2v2h4V2H5zm6 0h1a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h1a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2zm0 2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2H2v14h10V4h-1zM4 8h6a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 5h6a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path></svg><h2>Data Penduduk</h2></a>
    </div>
  </div> -->
</div>

















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