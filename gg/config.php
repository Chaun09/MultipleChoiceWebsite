<?php
$serverName = "localhost";
$dbUsername = "root";
$dbPass = "";
$dbName = "quizzz";

$conn = mysqli_connect($serverName, $dbUsername, $dbPass, $dbName);

if (!$conn) {
  die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>