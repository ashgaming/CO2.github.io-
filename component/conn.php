<?php
$host = "localhost";     // Replace with your host name or IP address
$dbname = "CO_2"; // Replace with your database name
$user = "root"; // Replace with your database username
$password = ""; // Replace with your database password

$conn = mysqli_connect($host, $user, $password, $dbname);
if ($conn->connect_error) {
    echo "error";
}
?>
