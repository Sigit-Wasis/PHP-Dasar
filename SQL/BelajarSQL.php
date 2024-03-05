<?php
$servername = "localhost"; 
$username = "root";
$password = "";
$database = "microdata";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $database);

//query Untuk ngambil data karyawan di database microdata
$sql = "SELECT * FROM karyawan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Menampilkan data data dalam bentuk tabel
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>jabatan</th>
                <th>Gaji</th>
            </tr>";
    
    // untuk mengeluarkan data dari setiap baris perlu query sql dibawah ini
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["nama_depan"]."</td>
                <td>".$row["jabatan"]."</td>
                <td>".$row["gaji"]."</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data dalam tabel.";
}

// // Check koneksi
// if ($conn->connect_error) {
//     die("Koneksi gagal: " . $conn->connect_error);
// } else {
//     echo "Koneksi berhasil!";
// }

// $conn->close();
?>
