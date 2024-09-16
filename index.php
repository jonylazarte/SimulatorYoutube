<?php
require_once 'config.php';

if (isset($_SESSION['user_token'])) {
  header("Location: welcome.php");
  print $_SESSION['user_token'];
  echo $_SESSION['user_token'];

} else {
  echo "<a href='" . $client->createAuthUrl() . "'>Google Login</a>";
}
