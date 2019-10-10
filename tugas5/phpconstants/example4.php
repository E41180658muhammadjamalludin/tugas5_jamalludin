<!DOCTYPE html>
<html>
<body>

<?php
// Konstanta diPHP bersifat global jadi dapat diakses dimanapun termasuk di dalam fungsi
define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
    echo GREETING;
}
 
myTest();
?> 

</body>
</html>
