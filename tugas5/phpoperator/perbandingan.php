<!DOCTYPE html>
<html>
<body>

<?php
$x = 100;  
$y = "100";
// equal
var_dump($x == $y); // mengembalikan nilai true karena nilanya sama meskipun beda tipe data
// Not Equal
var_dump($x != $y); // mengembalikan nilai false karena nilainya sama.
$x = 100;
$y = 50;

var_dump($x > $y); // mengembalikan nilai true karena $x lebih besar dari $y
var_dump($x < $y); // mengembalikan nilai false karena $x  lebih besar dari $y
?>  

</body>
</html>
