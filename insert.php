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
$sql = "INSERT INTO Myguest (firstname, lastname, email)
VALUES ('john','doe','john@example.com')";
if (mysqli_query($conn,$sql)) {
    echo "New record created successfully";
} else {
    echo "Error:".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>