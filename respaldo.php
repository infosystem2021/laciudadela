<?php

$db_host = 'localhost';
$db_name = 'mision';
$db_user = 'root';
$db_pass = 'nuevavictoria';


$salida_sql = $db_name.'.sql';
$dump = "mysqldump -h$db_host -u$db_user -p$db_pass --opt $db_name > $salida_sql";
system($dump, $output);
?>