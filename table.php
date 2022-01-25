<?php
include "config.php";
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