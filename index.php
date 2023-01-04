<?php 
require_once 'vendor/autoload.php';
use CallOfDuty\Client;

$client = new Client();
// echo '<pre>';
// print_r( $client );
// Use Activision email and password to login.
$client->login('iamsaeednazari@gmail.com', 'Sanaz1615148');