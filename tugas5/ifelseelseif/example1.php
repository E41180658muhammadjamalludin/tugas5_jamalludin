<!DOCTYPE html>
<html>
<body>

<?php
// data() merupakan fungsi bawaan php untuk mendapat waktu sekarang. Script dibawah parameternya 'H' maka jam saat ini nilai dari variabel t.
$t = date("H");
// kemudian cek apakah jam sekarang lebih kecil dari 20 jika ya maka script didalam block code {} akan dijalankan.
if ($t < "20") {
    echo "Have a good day!";
}
?>
 
</body>
</html>
