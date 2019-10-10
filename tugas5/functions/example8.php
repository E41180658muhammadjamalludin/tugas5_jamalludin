<?php declare(strict_types=1); // strict requirement
// Mengembalikan nilai yang disimpan difunction  beserta type datanya dengan tanda : diikutin type datanya.
function addNumbers(float $a, float $b) : float {
    return $a + $b;
}
echo addNumbers(1.2, 5.2); 
?>
