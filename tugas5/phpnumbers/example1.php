<!DOCTYPE html>
<html>
<body>

<?php
/* integer adalah bilangan bulat dengan rentang antara -2147483648 dan 2147483647. is_int() digunakan untuk mengecek type data integer pada sebuah
variabel. Outputnya berupa bolean  apabila integer maka nilainya true dan apabila tidak maka menampilkan false */
$x = 5985;
var_dump(is_int($x));

echo "<br>";


$x = 59.85;
var_dump(is_int($x));
?>  

</body>
</html>
