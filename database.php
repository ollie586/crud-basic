<?php
$host = "localhost";
$user = "root";
$password = "";
$name = "crud";

//create connection
$db = new mysqli($host, $user, $password, $name);

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
// echo "Connected successfully";
?>