<?php 
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iuran Kebersihan</title>

  <!--Font Awesome-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

  <!--CSS Link-->
  <link rel="stylesheet" href="../../css/fiture_user.css">

  </head>
<body>
 <!--Header-->
  <header class="header">
    <section class="wrap-header">
      <a href="home.html" class="logo">RW/08.</a>

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
        <img src="../../images/pic-1.jpg" alt="">
        <?php 
        include "../../login/koneksi.php";
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
        <a href="../profile.php" class="btn">View Profile</a>
        <a href="../../login/logout.php" class="option-btn">Logout</a>
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
    <img src="../../images/pic-1.jpg" alt="">
    <?php 
        include "../../login/koneksi.php";
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
    <a href="../profile.php" class="btn">View Profile</a>
    <a href="../../login/logout.php" class="option-btn">Logout</a>
  </div>

  <nav class="navbar">
    <a href="../home_user.php"><i class="fas fa-home"></i><span>Home</span></a>
    <!-- <a href="kas.html"><i class="fa-solid fa-hand-holding-dollar"></i><span>Kas</span></a> -->
    <a href="../iuran_user.php"><i class="fas fa-money-check"></i><span>Iuran</span></a>
    <!-- <a href="event.html"><i class="fa-solid fa-calendar-check"></i><span>Event</span></a> -->
    <a href="../about-us_user.php"><i class="fa-solid fa-question-circle"></i><span>About Us</span></a>
    <!-- <a href="contact.html"><i class="fa-solid fa-address-book"></i><span>Contact</span></a> -->
    <!-- <a href="data-penduduk.html"><i class="fa-solid fa-file"></i><span>Data Penduduk</span></a> -->
  </nav>
 </div>
 <!-- End Side Bar-->

 <!--Isi Kas -->
 <section class="judul">


   
    <div class="box-isi-kas">
      <div class="isi-kas">
        <h2>Invoice Kas 2023</h2>
      </div>
      <div class="isi-iuran-kas">
        <form  method="POST" action="cek_add_iuran.php" class="btn-bayar-bulan">
          <table class="tabel-kas">
            <tr>
              <th>No</th>
              <th>Nama Bulan</th>
              <th>Tagihan</th>
              <th>Total Bayar</th>
              <th>Status</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Januari</td>
              <td>Rp. 30000</td>
              <td>
                  <input class="field-bayar" type="text" name="pembayaran[]" />
              </td>
              <td></td>
            </tr>
            <tr>
              <td>2</td>
              <td>Februari</td>
              <td>Rp. 30000</td>
              <td>
                  <input class="field-bayar" type="text" name="pembayaran[]"  />
              </td>
              <td></td>
            </tr>
            <tr>
              <td>3</td>
              <td>Maret</td>
              <td>Rp. 30000</td>
              <td>
                  <input class="field-bayar" type="text" name="pembayaran[]"  />
              </td>
              <td></td>
            </tr>
            <tr>
              <td>4</td>
              <td>April</td>
              <td>Rp. 30000</td>
              <td>
                  <input class="field-bayar" type="text" name="pembayaran[]"  />
              </td>
                <td></td>
            </tr>
            <tr>
              <td>5</td>
              <td>Mei</td>
              <td>Rp. 30000</td>
              <td>
                  <input class="field-bayar" type="text" name="pembayaran[]"  />
              </td>
              <td></td>
            </tr>
            <tr>
              <td>6</td>
              <td>Juni</td>
              <td>Rp. 30000</td>
              <td>
                  <input class="field-bayar" type="text" name="pembayaran[]"  />
              </td>
              <td></td>
            </tr>
            <tr>
              <td>7</td>
              <td>Juli</td>
              <td>Rp. 30000</td>
              <td>
                  <input class="field-bayar" type="text" name="pembayaran[]"  />
              </td>
              <td></td>
            </tr>
            <tr>
              <td>8</td>
              <td>Agustus</td>
              <td>Rp. 30000</td>
              <td>
                  <input class="field-bayar" type="text" name="pembayaran[]"  />
              </td>
              <td></td>
            </tr>
            <tr>
              <td>9</td>
              <td>September</td>
              <td>Rp. 30000</td>
              <td>
                  <input class="field-bayar" type="text" name="pembayaran[]"  />
              </td>
              <td></td>
            </tr>
            <tr>
              <td>10</td>
              <td>Oktober</td>
              <td>Rp. 30000</td>
              <td>
                  <input class="field-bayar" type="text" name="pembayaran[]"  />
              </td>
              <td></td>
            </tr>
            <tr>
              <td>11</td>
              <td>November</td>
              <td>Rp. 30000</td>
              <td>

                  <input class="field-bayar" type="text" name="pembayaran[]"  />

              </td>
              <td></td>
            </tr>
            <tr>
              <td>12</td>
              <td>Desember</td>
              <td>Rp. 30000</td>
              <td>
                  <input class="field-bayar" type="text" name="pembayaran[]"  />
              </td>
              <td></td>
            </tr>
            <tr class="t">
              <td class="t-no"></td>
              <td class="t-nama"></td>
              <td class="t-tagihan">Total Kas :</td>
              <td class="t-kas"></td>
              <td class="t-status"></td>
            </tr>
          </table>
          <div class="submit">
            <input type="submit" class="btn" name="submit" value="Submit" />
          </div>
        </form>
      </div>
    </div>
  </div>

 </section>










 <!-- End Isi Kas -->




















 <!-- Footer
 <footer class="footer">

  &copy; copyright @ 2022 by <span>Muhammad Amer</span> | All Rights
  Reserved!

 </footer>
  End Footer -->


  <!--Js Script-->
  <script src="../../js/script.js"></script>
</body>
</html>