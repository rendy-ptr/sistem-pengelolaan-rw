<?php 
session_start();
include '../login/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/add_profile.css">
    <title>Document</title>
</head>
<body>

<div class="wrapper">
  <div class="profile">
    <div class="content">
      <h1>Edit Profile</h1>
      <form action="cek_add_profile.php" method="POST">
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
          </div>
          <div class="grid-65">
            <input type="text" name="namalengkap" id="fname" required />
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
            <p>*masukan email yang sama saat daftar</p>
          </div>
          <div class="grid-65">
            <input type="email" name="email" id="email" required />
          </div>
        </fieldset>
        <!-- Location -->
        <fieldset>
          <div class="grid-35">
            <label for="location">Alamat</label>
          </div>
          <div class="grid-65">
            <input type="text" name="alamat" id="location" required />
          </div>
        </fieldset>
        <!-- Country -->
        <fieldset>
          <div class="grid-35">
            <label for="country">No Hp</label>
          </div>
          <div class="grid-65">
            <input type="text" name="nohp" id="country" required />
          </div>
        </fieldset>

        <!-- Looking for Work -->
        <fieldset>
        <a href="profile.php">
          <input type="button" class="Btn cancel" value="Cancel" />
        </a>
          <input type="submit" class="Btn" name="submit" value="Save Changes" />
        </fieldset>
      </form>
    </div>
  </div>
</div>




</body>
</html>