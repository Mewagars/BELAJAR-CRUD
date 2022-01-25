<?php
include "config.php";
$sql = "INSERT INTO Myguest (firstname, lastname, email)
VALUES ('john','doe','john@example.com')";
if (mysqli_query($conn,$sql)) {
    echo "New record created successfully";
} else {
    echo "Error:".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>