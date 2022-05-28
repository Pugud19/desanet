<?php

$dbname = 'desanet';
$dn = 'mysql:dbname='.$dbname.';host=localhost';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Koneksi Suksess ke database $dbname ".$user;
} catch (PDOException $e) {
    echo 'Terjadi Kesalahan : '.$e->getMessage();
}


// $servername = "localhost";
// $database = "desanet";
// $username = "root";
// $password = "";
 
// // untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// // membuat koneksi
// $conn = mysqli_connect($servername, $username, $password, $database);
// // mengecek koneksi
// if (!$conn) {
//     die("Koneksi gagal: " . mysqli_connect_error());
// }
// echo "Koneksi berhasil";
// mysqli_close($conn);

?>
