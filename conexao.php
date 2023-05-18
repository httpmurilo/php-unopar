<?php
$servername = "localhost";
$username = "root";
$password = "root@123";
$dbname = "teste";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>
