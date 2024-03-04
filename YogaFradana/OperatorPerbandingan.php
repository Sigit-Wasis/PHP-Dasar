<?php

// Sama dengan

$a = 7;
$b = 7;
if ($a == $b) {
    echo "$a sama dengan $b";
} else {
    echo "$a tidak sama dengan $b";
}

echo "\n";
// tidak Sama dengan

$a = 7;
$b = 8;
if ($a != $b) {
    echo "$a tidak sama dengan $b";
} else {
    echo "$a sama dengan $b"."\n";
}

echo "\n";
// Lebih Besar dari
$a = 10;
$b = 8;
if ($a > $b) {
    echo "$a Lebih Besar Dari $b";
} else {
    echo "$a Tidak Lebih Besar Dari $b"."\n";
}

echo "\n";
// Tidak Lebih Besar dari
$a = 5;
$b = 8;
if ($a < $b) {
    echo "$a Lebih Kecil Dari $b";
} else {
    echo "$a Tidak Lebih kecil Dari $b"."\n";
}

echo "\n";
// Lebih Besar sama dengan
$a = 25;
$b = 21;
if ($a >= $b) {
    echo "$a Lebih Besar atau sama dengan $b";
} else {
    echo "$a Tidak Lebih Besar atau tidak sama dengan $b";
}

echo "\n";
// Tidak Lebih Besar sama dengan
$a = 20;
$b = 21;
if ($a <= $b) {
    echo "$a Tidak Lebih Besar atau tidak sama dengan $b";
} else {
    echo "$a Lebih Besar atau sama dengan $b";
}

?>
