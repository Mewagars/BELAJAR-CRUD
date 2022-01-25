<?php
include "config.php";
if (!empty($_GET) && !empty($_GET["id"])){
    $id = $_GET["id"];
}else {
    $id = 0;
}
$sql = "UPDATE MyGuest SET lastname='Doe'WHERE id=".$id;
if(mysqli_query($conn,$sql)) {
    echo "Record updated successfully";
}else {
    echo "error updating record:". mysqli_error($conn);
}
mysqli_close($conn);
?>