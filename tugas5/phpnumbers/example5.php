<!DOCTYPE html>
<html>
<body>

<?php
/* is_numeric digunakan untuk mengecek suatu variabel apakah angka atau angka string. Fungsi ini akan mengembalikan nilai true apabila nilai variabel
berupa angka atau angka string dan apabila tidak akan mengembalikan nilai false */
$x = 5985;
var_dump(is_numeric($x));

echo "<br>";

$x = "5985";
var_dump(is_numeric($x));

echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));

echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));
?>  

</body>
</html>
