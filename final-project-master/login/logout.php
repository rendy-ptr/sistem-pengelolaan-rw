<?php   
session_start(); //to ensure you are using same session
// foreach ($_SESSION as $key => $values) {
//     unset($_SESSION[$key]);
// }
session_destroy(); //destroy the session
header("location: ../home.html"); //to redirect back to "index.php" after logging out
exit();
?>