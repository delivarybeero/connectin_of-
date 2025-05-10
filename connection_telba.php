<?php
$servername = 'sql201.infinityfree.com';
$dbname = 'if0_38736305_telba_database';
$username = 'if0_38736305';
$password = 'fehKlf90CaY';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("فشل الاتصال: " . mysqli_connect_error());
}
?>