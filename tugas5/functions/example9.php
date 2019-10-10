<?php declare(strict_types=1); // strict requirement
// Mengembalikan nilai yang disimpan difunction  beserta type datanya dengan tanda : diikutin type datanya.
function addNumbers(float $a, float $b) : int {
    // karena nilai yang dioper float maka dikonversi keinteger terlebih dahulu.
    return (int)($a + $b);
}
echo addNumbers(1.2, 5.2); 
?>
