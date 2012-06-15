<?php
$email = $_POST['email'];

if ($email == '')
{
    return;
}

$f = fopen('emaillist.csv','a');
fwrite($f,$email."\n");
fclose($f);
?>
