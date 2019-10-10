<!DOCTYPE html>
<html>
<body>

<?php
$x = 100;  
$y = 50;
//Operator and akan mengembalikan nilai true apabila kedua kondisinya bernilai true
if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
// Operator or akan mengembalikan nilai true apabila salah satu kondisinya bernilai true
if ($x == 100 or $y == 80) {
    echo "Hello world!";
}
$x = 100;  
// != adalah operator not atau bukan jadi maksud script dibawah apakah nilai $x tidak sama dengan 100. karena benar maka block kode dieksekusi.
if ($x !== 90) {
    echo "Hello world!";
}
?>  

</body>
</html>
