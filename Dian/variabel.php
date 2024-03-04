 <?php
// Tipe data dasar (Integer, Float, Boolean, String) 
// variabel integer
// $jmlmatkul = 1;
// echo "jmlmatkul: $jmlmatkul ";
// // variabel float
// $nilaimatkul = 85;
// echo "nilaimatkul: $nilaimatkul ";
// //  variabel boolean
// $lulus = true;
// echo "lulus: $lulus ";
// //  variabel string
// $nama ="dian";
// echo "nama: $nama ";
// 


// Tipe data primitive (Array, Object)  
// array 
// $listmahasiswa = ["Dian afni", "Alifia", "yoga", "ivan"];
// echo"nama mahasiswa: ";
// foreach($listmahasiswa as $nama_mahasiswa){
//     echo $nama_mahasiswa. ", " ;
// }

// echo "\n"; // Menambahkan baris baru

// //object
// class kampus{
//     public $jurusan;
//     public $prodi;

//     public function __construct($jurusan , $prodi){
//         $this->jurusan = $jurusan;
//         $this->prodi = $prodi;
//     }
// }

// //menampilkan data object
// $kampusvar = new kampus("ekonomi dan bisnis","manajemen informatika");
// echo "jurusan : " . $kampusvar->jurusan . "\n";
// echo "prodi: " . $kampusvar->prodi . "\n";

//Tipe data khusus (Resource, Null)
//Resource
$file = fopen("novel.txt", "r");

if (!$file) {
    echo "File tidak bisa ditampilkan.\n";
} else {
    echo "File berhasil ditampilkan .\n";
    fclose($file);
}

//Null

$hobi = null;

echo "Hobi: membaca" . $hobi . "\n"; // Output: Hobi:

?>