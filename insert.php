<?php
$firsname="mewaga";
$email="megawagarenggaling@gmail.com";
$lastname="mewagarenggaling";
if (!empty($_POST)){
    $firstname=$_POST ["firstname"];
    $email=$_POST ["email"];
    $lastname=$_POST ["lastname"];
} else {
    die("input harus lewat form");
}
include "config.php";
$sql = "INSERT INTO MyGuest (firstname, lastname, email)
VALUES (?,?,?)";
$stmt = mysqli_prepare($conn,$sql);
mysqli_stmt_bind_param($stmt, "sss" , $firstname,$lastname,$email);
if (mysqli_stmt_execute($stmt)) {
    echo "New record created successfully";
} else {
    echo "Error:".$sql ."<br>". mysqli_error($conn);
}
mysqli_close($conn);
?>