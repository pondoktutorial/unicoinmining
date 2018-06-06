<?php
session_start();
if(isset($_SESSION['token'])){
  // remove all session variables
session_unset();
// destroy the session
session_destroy();
  header('location:/login');
  exit();
}

?>
