<?php
$servername = "localhost"; 
$username = "root";
$password = "";
$database = "microdata";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $database);



// // Check koneksi
// if ($conn->connect_error) {
//     die("Koneksi gagal: " . $conn->connect_error);
// } else {
//     echo "Koneksi berhasil!";
// }

// $conn->close();
?>
