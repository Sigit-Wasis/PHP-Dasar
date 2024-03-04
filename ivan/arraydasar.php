<?php
// Declare the arrays
        $keys = ['apel', 'eager', 'orange'];
        $values = ['buah', 'sendal', 'warna'];

// Use array_values()
        $indexedValues = array_values($values);
        echo "array values: ";
    print_r($indexedValues);
echo "\n";

// Use array_keys()
        $keyIndices = array_keys($keys);
echo "array keys: ";
        print_r($keyIndices);
        echo "\n";

// Use array_combine()
        $combinedArray = array_combine($keys, $values);
    echo "array combine: ";
print_r($combinedArray);
echo "\n";

// Use array_flip()
        $flippedKeys = array_flip($keys);
    echo "array flip: ";
    print_r($flippedKeys);
    echo "\n";
?>
