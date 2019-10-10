<!DOCTYPE html>
<html>
<body>

<?php
$t = date("H");
echo "<p>The hour (of the server) is " . $t; 
echo ", and will give the following message:</p>";
// Mengecek apakah jam sekarang lebih kecil dari 20 jika ya maka script didalam block code {} akan dijalankan.
if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") { // Apabila kondisi diatas atau pertama tidak terpenuhi maka kondisi kedua akan diperiksa dan jika terpenuhi maka script jalan
    echo "Have a good day!";
} else { // Apabila kondisi kedua diatas tidak terpenuhi maka script diblock kode else lah yang akan dieksekusi
    echo "Have a good night!";
}
?>
 
</body>
</html>
