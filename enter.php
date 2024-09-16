<?php

require_once 'config.php';
if(isset($_SESSION['user_token'])){
  $ses = $_SESSION['user_token'];
  $client->setAccessToken($ses['access_token']);
  
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
    $json = json_encode($userinfo);
    echo $json;
  
} else echo "nada";

?>