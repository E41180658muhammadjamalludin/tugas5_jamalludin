<?php 
declare(strict_types=1); // dengan script ini maka nilai "5 days" dianggap string sehingga terjadi error ketika proses aritmatika

function addNumbers(int $a, int $b) {
    return $a + $b;
}
echo addNumbers(5, "5 days");
?>