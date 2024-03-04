
<?php
//Tipe data dasar (Integer, Float, Boolean, String)
//Integer
// $umur = 21;
// //Float
// $berat = 56;
// //Bolean
// $islulus = TRUE;
// //String
// $nama = "Alifia Rahmanita";

// echo "Umur: " . $umur . "\n";
// echo "Berat: " . $berat . "\n";
// echo "Lulus: " . $islulus . "\n";
// echo "Nama: " . $nama . "\n";


//Tipe data primitive (Array, Object)
//Array
// $hobi = ["Ngopi", "Ngoding", "Nongkrong"];

// // Menampilkan array dengan loop foreach
// echo "Hobi: ";
// foreach ($hobi as $item) {
//     echo $item . ", ";
// }
// echo "\n"; // Menambahkan baris baru

// // Object
// class Mhs {
//     public $mahasiswa;
//     public $usia;

//     function __construct($mahasiswa, $usia) {
//         $this->mahasiswa = $mahasiswa;
//         $this->usia = $usia;
//     }
// }

// $mhs = new Mhs("Sialip", 25);

// // Menampilkan properti object
// echo "Nama Mahasiswa : " . $mhs->mahasiswa . "\n";
// echo "Usia: " . $mhs->usia . "\n";


//Tipe data khusus (Resource, Null)
//Resource
$file = fopen("data.txt", "r");

if (!$file) {
    echo "File tidak dapat dibuka.\n";
} else {
    echo "File berhasil dibuka.\n";
    fclose($file);
}

//Null

$nama = null;

echo "Nama: Alifia" . $nama . "\n"; // Output: Nama:


?>




