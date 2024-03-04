<?php

// Tipe data Khusus Resource

$file = fopen("example.txt", "r");

// Cek Kondisi

if (is_resource($file)) {
    echo "File berhasil dibuka.\n";
} else {
    echo "Gagal membuka file.\n";
}

//Tipe data Null

// Variabel yang belum diinisialisasi
$variable1 = null;

// Variabel dengan nilai null
$variable2 = null;

// Menampilkan variabel yang bernilai null
echo "Variabel 1: " . $variable1 . "\n";
echo "Variabel 2: " . $variable2 . "\n";

?>