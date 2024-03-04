<?php

//Array Value
echo "Array Value"."\n";
$keys = ['apel', 'eager', 'orange'];
$values = ['buah', 'sendal', 'warna'];

$hasil = array_values($keys);
print_r($hasil);

echo "\n";
echo "Array Key"."\n";
// Array  Key

$keys = ['apel', 'eager', 'orange'];
$values = ['buah', 'sendal', 'warna'];

$hasil1 = array_keys($keys);
print_r($hasil1);

echo "\n";
echo "Array Combine"."\n";
// Array Combine

$keys = ['apel', 'eager', 'orange'];
$values = ['buah', 'sendal', 'warna'];

$hasil2 = array_combine($keys, $values);
print_r($hasil2);

echo "\n";
echo "Array Flip"."\n";
// Array Flip

$keys = ['apel', 'eager', 'orange'];
$values = ['buah', 'sendal', 'warna'];

$hasil3 = array_flip($keys);
print_r($hasil3);
?>
