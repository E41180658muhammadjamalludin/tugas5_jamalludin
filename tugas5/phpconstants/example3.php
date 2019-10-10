<!DOCTYPE html>
<html>
<body>

<?php
// Pada PHP 7.0 juga dapat membuat konstanta dengan teknik array dengan fungsi define
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
// Array dimulai dari index 0 . Sehingga yang terpanggil 'Alfa Romeo'
echo cars[0];
?> 

</body>
</html>
