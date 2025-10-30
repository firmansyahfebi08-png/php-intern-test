git init
git add .
git commit -m "Initial commit - PHP Intern Test"
git branch -M main
git remote add origin https://github.com/firmansyahfebi-8-png/php-intern-test.git
git push -u origin main




<?php
// Ukuran pola (7x7)
$size = 7;

for ($i = 0; $i < $size; $i++) {
    for ($j = 0; $j < $size; $j++) {
        // Kondisi untuk menentukan posisi 'X'
        if (
            $i == $j ||                  // diagonal utama
            $i + $j == $size - 1         // diagonal kedua
        ) {
            echo "X ";
        } else {
            echo "O ";
        }
    }
    echo PHP_EOL;
}
