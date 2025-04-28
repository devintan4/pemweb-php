<?php
$host   = "localhost";
$dbUser = "devintan";
$dbPass = "devintan";
$dbName = "pemweb";

// create connection
$conn = mysqli_connect($host, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully via MySQLi";

// don’t forget to close
mysqli_close($conn);
?>
