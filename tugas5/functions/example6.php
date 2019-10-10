<?php declare(strict_types=1); // strict requirement ?>
<!DOCTYPE html>
<html>
<body>

<?php
// Membuat function dengan setHeight dengan satu parameter.
function setHeight(int $minheight = 50) {
    echo "The height is : $minheight <br>";
}

setHeight(350);
// Apabila memanggil fungsi tanpa ada parameter maka muncul nilai default yang sebelumnya diset di function.
setHeight();
setHeight(135);
setHeight(80);
?>

</body>
</html>
