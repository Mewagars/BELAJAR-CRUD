<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
// membuat koneksi 
$conn = mysqli_connect($servername,$username,$password,$dbname);
// mengecek koneksi
if (!$conn) {
    die("connection failed:".mysqli_connect_error());
}
?>
