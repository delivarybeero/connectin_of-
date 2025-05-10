<?php
$servername = 'sql101.infinityfree.com';
$dbname = 'if0_38502958_mydatabase';
$username = 'if0_38502958';
$password = 'eOnb3Iq1FUrlVF';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("فشل الاتصال: " . mysqli_connect_error());
}
?>