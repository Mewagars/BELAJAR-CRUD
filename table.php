<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
//create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
// check connection
if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}
//sql to create table
$sql = "CREATE TABLE Myguest (
id INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARChAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
if (mysqli_query($conn,$sql)) {
    echo "Table Myguest created successfully";
} else {
    echo "Error creatng table: " . mysqli_error($conn);
}
mysqli_close($conn);
?>