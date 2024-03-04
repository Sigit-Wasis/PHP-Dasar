<?php

// Tipe data primitive (Array dan object)

// 1. Array

$Microdata = ["Alifia", "Dian", "Ivan", "Yoga"];

echo "Dibawah ini Contoh Output Array :"."\n";
foreach ($Microdata as $PKL) {
    echo $PKL . "\n";
}

// 2. Object

class Mahasiswa{
    public $Nama;
    public $Prodi;

    public function panggil() {
        return "Hello, Nama saya adalah " . $this->Nama . " dan saya dari Prodi " . $this->Prodi;
    }
}

$Mahasiswa1 = new Mahasiswa();
$Mahasiswa1->Nama = "Yoga";
$Mahasiswa1->Prodi = "Ekonomi Bisnis";

echo $Mahasiswa1->panggil();

?>