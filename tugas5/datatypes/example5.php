<!DOCTYPE html>
<html>
<body>

<?php
// Membuat class dengan nama Car
class Car {
    // Membbuat construct atau script pertama kali dijalankan ketika dibuat objek.
    function Car() {
        $this->model = "VW";
    }
}
// Membuat object yang dimasukkan kevariabel herbie
$herbie = new Car();

// Menampilkan  properti objek pada sebuah class.
echo $herbie->model;
?>

</body>
</html>
