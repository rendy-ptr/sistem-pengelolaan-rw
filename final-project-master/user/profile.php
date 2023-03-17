<?php 
session_start();
include '../login/koneksi.php';
      // var_dump($_SESSION) ; 
      if (!empty($_SESSION)) { //if (isset($_SESSION)) {};
        $user_profile = $_SESSION['email'];
      }
      $sql_user = mysqli_query($connect, "SELECT * from profile where email='$user_profile'");
      $data_user = mysqli_fetch_array($sql_user);
      // var_dump($data_user);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/profile.css">
    <title>Document</title>
</head>
<body>

<div class="wrapper">
  <div class="profile">
    <div class="content">
      <h1>Your Profile</h1>
      <form action="" method="POST">
        <!-- Photo -->
        <fieldset>
          <div class="grid-35">
            <label for="avatar">Your Photo</label>
          </div>
          <div class="grid-65">
            <span class="photo" title="Upload your Avatar!">
            </span>
            <!-- <input type="file" class="btn" /> -->
          </div>
        </fieldset>

        <fieldset>
          <div class="grid-35">
            <label for="fname">Nama Lengkap</label>
            <label for="fname"> : </label>
          </div>
          <div class="grid-65">
            <!-- <input type="text" name="namalengkap" id="fname" required /> -->
            <?php 
                echo $data_user['nama_lengkap']??null; //or null ganti "" 
            ?>
          </div>
        </fieldset>
        <!-- last name -->
        <!-- <fieldset>
          <div class="grid-35">
            <label for="lname">Last Name</label>
          </div>
          <div class="grid-65">
            <input type="text" id="lname" tabindex="2" />
          </div> 
        </fieldset> -->
        <!-- Email -->
        <fieldset>
          <div class="grid-35">
            <label for="email">Email Address</label>
            <label for="email"> : </label>
            <!-- <p>*masukan email yang sama saat daftar</p> -->
          </div>
          <div class="grid-65">
            <!-- <input type="email" name="email" id="email" required /> -->
            <?php 
                echo $data_user['email']??null ; 
            ?>
          </div>
        </fieldset>
        <!-- Location -->
        <fieldset>
          <div class="grid-35">
            <label for="location">Alamat</label>
            <label for="location"> : </label>
          </div>
          <div class="grid-65">
            <!-- <input type="text" name="alamat" id="location" required /> -->
            <?php 
                echo $data_user['alamat']??null ; 
            ?>
          </div>
        </fieldset>
        <!-- Country -->
        <fieldset>
          <div class="grid-35">
            <label for="country">No Hp</label>
            <label for="country"> : </label>
          </div>
          <div class="grid-65">
            <!-- <input type="text" name="nohp" id="country" required /> -->
            <?php 
                echo $data_user['nohp']??null ; 
            ?>
          </div>
        </fieldset>

        <!-- Looking for Work -->

        <!-- jika data kosong harap menambahkan data terlebih dahulu -->
        <!-- pastikan mengisi data dengan benar karena hanya dilakukan sekali untuk mencegah error pada database  -->
        <div class="note">
        <p>*jika data kosong harap menambahkan data terlebih dahulu</p>
        <p>*pastikan mengisi data dengan benar karena hanya dapat dilakukan sekali untuk mencegah error pada database</p>
        </div>
        <fieldset>
        <a href="home_user.php">
          <input type="button" class="Btn cancel" value="Cancel" />
        </a>
        <a href="add_profile.php">
          <input type="button" class="Btn add" value="Add Profile Data" />
        </a>
          <!-- <input type="submit" class="Btn" value="Save Changes" /> -->
        </fieldset>
      </form>
    </div>
  </div>
</div>



</body>
</html>