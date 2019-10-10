<!DOCTYPE html>
<html>
<body>

<?php
// Switch digunakan apabila untuk mengecek kondisi yang bernilai tunggal atau tidak terlalu ribet seperti >,<,<= dll.
$favcolor = "red";

switch ($favcolor) {
    // Apakah nilai variabel favcolor sama dengan "red" apabila ya maka script dibawah sampai break akan dijalankan.
    case "red":
        echo "Your favorite color is red!";
        // Break digunakan untuk menghentingkan program. Karena jika tidak ada break akan tetap dijalankan script dibawahnya.
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    // Default digunakan apabila tidak ada case yang cocok nilainya dengan nilai variabel yang diuji. Sehingga script di dalam default yg dijalankan.
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
?>
 
</body>
</html>
