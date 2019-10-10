<!DOCTYPE html>
<html>
<body>

<?php
$cars = array("Volvo", "BMW", "Toyota");
// rsort digunakan untuk mengurutkan nilai array secara descending(besar ke kecil atau z-a) bisa data berupa numerik atau string.
rsort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
?>

</body>
</html>
