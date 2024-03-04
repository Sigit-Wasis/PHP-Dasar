<?php

// Tipe Data Dasar (Integer, Float, Boolean, String, dan Array)

// 1. Integer
$integer = 1;

// 2. Float
$float = 0.1;

// 3. Boolean
$boolean = true;

// 4. String
$string = "Nama Saya Yoga awowwkk";

// 5. Array
$Microdata = ["Alifia", "Dian", "Ivan", "Yoga"];

// Manampilkan Hasil Ke Terminal
echo "Contoh data Integer =  " . $integer . "\n";
echo "Contoh data Float =  " . $float . "\n";
echo "Contoh data Boolean =  " . $boolean . "\n";
echo "Contoh data String =  " . $string . "\n";

// Menampilkan seluruh isi array
echo "Dibawah ini Contoh Output Array :"."\n";
foreach ($Microdata as $PKL) {
    echo $PKL . "\n";
}
?>
