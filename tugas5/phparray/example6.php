<!DOCTYPE html>
<html>
<body>

<?php
// Proses pengeluaran nilai array assosiatif dengan perulangan foreach
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>

</body>
</html>
