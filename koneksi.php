<?php
$dbServer = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "db_akademik";

// Create connection
$koneklink = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($koneklink->connect_error) {
  die("Connection failed: " . $koneklink->connect_error);
}
echo "Connected successfully";

?>