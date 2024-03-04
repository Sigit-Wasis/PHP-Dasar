<?php

// Mendefinisikan array
$keys = ['apel', 'eager', 'orange'];
$values = ['buah', 'sendal', 'warna'];

// array_values(): Mengambil nilai-nilai dari array atau elemen individual yang disimpan di dalam array
$nilaiBuah = array_values($keys);
echo "Nilai buah: ";
print_r($nilaiBuah); // jadi untuk outputnya: Array ( [0] => apel [1] => eager [2] => orange )

// array_keys(): Mengambil kunci-kunci dari array atau indeks atau pengenal unik yang digunakan untuk mengakses elemen individual
$kunciNilai = array_keys($values);
echo "\nKunci nilai: ";
print_r($kunciNilai); // lalu Output: Array ( [0] => 0 [1] => 1 [2] => 2 )

// array_combine(): Menggabungkan dua array menjadi satu array
$buahGabungan = array_combine($keys, $values);
echo "\nBuah gabungan: ";
print_r($buahGabungan); // Outputnya: Array ( [apel] => buah [eager] => sendal [orange] => warna )

// array_flip(): Membalikkan kunci dan nilai array
$buahTerbalik = array_flip($buahGabungan);
echo "\nBuah terbalik: ";
print_r($buahTerbalik); // Outputnya : Array ( [buah] => apel [sendal] => eager [warna] => orange )

?>
