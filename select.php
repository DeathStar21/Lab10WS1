<!DOCTYPE html>
<html lang="en">
<body>
<?php
    $language=$_GET["language"];
    setcookie("lang", $language,time()+600);
?>
</body>
</html>