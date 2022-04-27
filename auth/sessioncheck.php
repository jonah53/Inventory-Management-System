<?php
// start or continue session


session_start();
if (!isset($_SESSION['logged'])) {
  header('Refresh: 0; URL=auth/login.php?redirect=' . $_SERVER['PHP_SELF']);
  die();
  }
?>
