<?php
include "config.php";
$sql = "DELETE FROM myguest WHERE id=3";
if (mysqli_query($conn,$sql)) {
    echo "record deleted successfully";
} else {
    echo "error deleting record:". mysqli_error ($conn);
}
mysqli_close($conn);
?>