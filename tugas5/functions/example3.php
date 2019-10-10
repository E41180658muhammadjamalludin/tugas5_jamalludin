<!DOCTYPE html>
<html>
<body>

<?php
// Membuat function dengan nama familyName dengan dua parameter.
function familyName($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
}
// Fungsi dapat dipanggil berkali -kali. Script dibawah functionya mengoper 2 nilai dan diolah difunctionya.
familyName("Hege","1975");
familyName("Stale","1978");
familyName("Kai Jim","1983");
?>

</body>
</html>
