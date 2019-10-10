<!DOCTYPE html>
<html>
<body>

<?php
// Penamaan konstanta diphp juga case sensitif atau penggunaan huruf besar dan kecil berpengaruh jadi jamal dengan Jamal beda.
define("GREETING", "Welcome to W3Schools.com!", true);
// Akan error karena yang dibuat sebelumnya adalah GREETING BUKAN greeting
echo greeting;
?> 

</body>
</html>
