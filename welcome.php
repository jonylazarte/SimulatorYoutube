<?php
require_once 'config.php';

// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);

  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $userinfo = [
    'email' => $google_account_info['email'],
    'first_name' => $google_account_info['givenName'],
    'last_name' => $google_account_info['familyName'],
    'gender' => $google_account_info['gender'],
    'full_name' => $google_account_info['name'],
    'picture' => $google_account_info['picture'],
    'verifiedEmail' => $google_account_info['verifiedEmail'],
    'token' => $google_account_info['id'],
  ];
  $json = json_encode($google_account_info);
  print $json;
  // save user data into session
  $_SESSION['user_token'] = $token;

  $email = $userinfo['email'];
  $fullname = $userinfo['full_name'];
  $ctrsna = $userinfo['full_name'];
  $token = $userinfo['token'];
  $picture = $userinfo['picture'];
  
  $query = "SELECT * from usuarios2 WHERE email = '$email'";
  $result = mysqli_query($conn, $query);
  $numgmails = mysqli_num_rows($result);

  if($numgmails == 0){
  $qry = "INSERT INTO `usuarios2` (`email`,`nombre`,`contrasena`,`token`,`picture`) VALUES ('$email','$fullname','$fullname','$token','$picture')";
  $cxtar = mysqli_query($conn, $qry);
  echo $cxtar;
  } else echo "nada";

  

  header("Location: http://localhost/TEST1/index.html");

} else {
  if (!isset($_SESSION['user_token'])) {
    header("Location: index.php");
    die();
  }

  // checking if user is already exists in database
  //$sql = "SELECT * FROM users WHERE token ='{$_SESSION['user_token']}'";
  //$result = mysqli_query($conn, $sql);
  //if (mysqli_num_rows($result) > 0) {
    // user is exists
   // $userinfo = mysqli_fetch_assoc($result);
 // }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
</head>

<body>
  <img src="<?= $userinfo['picture'] ?>" alt="" width="90px" height="90px">
  <ul>
    <li>Full Name: <?= $userinfo['full_name'] ?></li>
    <li>Email Address: <?= $userinfo['email'] ?></li>
    <li>Gender: <?= $userinfo['gender'] ?></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</body>

</html>