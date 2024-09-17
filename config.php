<?php

require_once 'vendor/autoload.php';

session_start();

// init configuration
$clientID = '741110825287-m5vk16ht2v0v3srd0c3dk0bivvj8ahgt.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/TEST1/welcome.php';


// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// Connect to database
$hostname = "mysql.railway.internal";
$username = "root";
$password = "VTiCxHHQzEntcJvzoXuUCZUXKBJYnaTv";
$database = "railway";

$conn = mysqli_connect($hostname, $username, $password, $database);
