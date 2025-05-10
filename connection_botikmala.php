<?php
$servername = 'sql307.infinityfree.com';
$dbname = 'if0_38246983_mydatabase';
$username = 'if0_38246983';
$password = 'S2bU5A0b7bZo';
// إنشاء الاتصال
$conn = mysqli_connect($servername, $username, $password, $dbname);

// التحقق من الاتصال
if (!$conn) {
    die("فشل الاتصال: " . mysqli_connect_error());
}
//echo "تم الاتصال بنجاح";
?>