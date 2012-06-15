<?php
$email = $_GET['email'];
$f = fopen('testfile.txt','a');
fwrite($f,$email."\n");
?>
