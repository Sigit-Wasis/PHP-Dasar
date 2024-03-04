<?php
//Tipe data dasar (Integer, Float, Boolean, String)
//Integer
$umur = 20;
//Float
$berat = 61;
//Bolean
$islulus = TRUE;
//String
$nama = "Ivan Setiawan";

echo "Umur: " . $umur . "\n";
echo "Berat: " . $berat . "\n";
echo "Lulus: " . $islulus . "\n";
echo "Nama: " . $nama . "\n";


//Tipe data primitive (Array, Object)
//Array
$hobi = ["Sepak Bola", "Futsal", "Mancing", "Cari Duit"];

// Menampilkan array dengan loop foreach
echo "Hobi: ";
foreach ($hobi as $item) {
    echo $item . ", ";
}
echo "\n"; // Menambahkan baris baru

// Object
class Mhs {
    public $mahasiswa;
    public $usia;

    function __construct($mahasiswa, $usia) {
        $this->mahasiswa = $mahasiswa;
        $this->usia = $usia;
    }
}

$mhs = new Mhs("Ivan", 25);

// Menampilkan properti object
echo "Nama Mahasiswa : " . $mhs->mahasiswa . "\n";
echo "Usia: " . $mhs->usia . "\n";


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

echo "Nama: Ivan" . $nama . "\n"; // Output: Nama:


?>