<?php
$firsname="mewaga";
$email="megawagarenggaling@gmail.com";
$lastname="mewagarenggaling";

/*
pengecekan variabel $_post, apakah kosong atau tidak
jika tidak kosong variabel $firstname dkk diisi dengan nilai dari $_post
jika kosong, hentikan script dan tampilkan keterangan 
*/
if (!empty($_POST) && !empty($_POST["id"])){
    $id= $_POST["id"];
    $firstname=$_POST ["firstname"];
    $email=$_POST ["email"];
    $lastname=$_POST ["lastname"];
} else {
    die("data tidak ditemukan");
}
//masukan script config.php
include "config.php";

//
$sql = "UPDATE MyGuest SET firstname=?, lastname=?,email=? WHERE id=?";

//variabel $stmt diisi fungsi mysqli_prepare dengan input parameter $conn dan $sql
$stmt = mysqli_prepare($conn,$sql);

/* menjalanklan fungsi mysqli_stmt_bind_param untuk mengganti karakter ? menjadi nilai dari parameter yang diinputkan
-parameter ke1 adalah $stmt nilai dari fungsi mysqli_prepare
-parameter ke2 adalah (sss) adalah tipe data dari masing-masing ?
( refrensi :https://www.php.net/manual/en/mysqli-stmt.bind-param.php)
-parameter ke3 dst adalah nilai variabel untuk menggantikan ?
*/ 
mysqli_stmt_bind_param($stmt, "sssi" , $firstname,$lastname,$email,$id);
/*menjalankan mysqli_stmt_execute dengan input parameter $stmt 
jika fungi berhasil menjalankan query maka tampilan pesan succes
jika gagal akan menampilkan pesan failed
*/
if (mysqli_stmt_execute($stmt)) {
    echo "New record created successfully";
} else {
    echo "Error:".$sql ."<br>". mysqli_error($conn);
}
// menjalankan fungsi mysqli_close untuk menutup koneksi database
mysqli_close($conn);
?>