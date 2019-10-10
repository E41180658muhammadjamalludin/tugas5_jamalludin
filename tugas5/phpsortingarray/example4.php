<!DOCTYPE html>
<html>
<body>

<?php
$numbers = array(4, 6, 2, 22, 11);
// rsort digunakan untuk mengurutkan nilai array secara descending(besar ke kecil atau z-a) bisa data berupa numerik atau string.
rsort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";
}
?>

</body>
</html>
