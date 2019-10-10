<!DOCTYPE html>
<html>
<body>

<?php 
/* Ketika membuat variabel di PHP tidak perlu mendeklarasikan type datanya melainkan hanya memberikan valuenya maka PHP langsung mengenali type
data sesuai dengan valuenya.
*/
/* Type data String adalah kumpulan berbagai karakter. Type data ini harus diapit dengan tanda petik satu atau dua perbedaanya apabila diapit tanda ""
maka value variabel yang ditampilkan  sedangkan apabila tanda '' maka yang tampil nama variabelnya saja beserta tanda $.
*/
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>"; 
echo $y;
?>

</body>
</html>
