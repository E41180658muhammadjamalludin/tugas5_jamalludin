<!DOCTYPE html>
<html>
<body>

<?php
$cars = array("Volvo", "BMW", "Toyota");
// sort digunakan untuk mengurutkan nilai array secara ascending(kecil ke besar atau a-z) bisa data berupa numerik atau string.
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
?>

</body>
</html>
