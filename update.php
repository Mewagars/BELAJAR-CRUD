<?php
include "config.php";
$sql = "UPDATE MyGuest SET lastname='Doe'WHERE id=2";
if(mysqli_query($conn,$sql)) {
    echo "Record updated successfully";
}else {
    echo "error updating record:". mysqli_error($conn);
}
mysqli_close($conn);
?>