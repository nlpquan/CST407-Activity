<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// modify these settings according to the account on your database server.
$host = "vkh7buea61avxg07.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$port = "3306";
$username = "ih8as6f42k6wgqty";
$user_pass = "zd47c8y4bcj94j4v";
$database_in_use = "vnlsbst1j4686jju";


$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);
if ($mysqli->connect_error) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";

?>
