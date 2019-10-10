<!DOCTYPE html>
<html>
<body>

<?php
$t = date("H");
// kemudian cek apakah jam sekarang lebih kecil dari 20 jika ya maka script didalam block code {} akan dijalankan.
if ($t < "20") {
    echo "Have a good day!";
} else { // Tetapi jika kondisi diatas tidak terpenuhi maka script ddalam block kode {} dibawah ini yang akan dijalankan.
    echo "Have a good night!";
}
?>
 
</body>
</html>
