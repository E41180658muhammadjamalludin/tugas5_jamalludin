<!DOCTYPE html>
<html>
<body>

<?php 
$x = 6;
// didalam block code do tetap dijalankan satu kali meskipun kondisi di while false.
do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
?>

</body>
</html>
