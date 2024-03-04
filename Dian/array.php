<?php
// Buat Basic Array
//mendefinisikan array

$keys = ['apel', 'eager', 'orange'];
$values = ['buah', 'sendal', 'warna'];

// Mengambil array values
$ambil_values = array_values($values);
print_r($ambil_values);

// Mengambil array keys
$ambil_keys = array_keys($keys);
print_r($ambil_keys);

// Menggabungkan keys dan values menjadi array asosiatif
$combinasi = array_combine($keys, $values);
print_r($combinasi);

// Membalikkan kunci dan nilai
$nilaiflip= array_flip($keys);
print_r($nilaiflip);
