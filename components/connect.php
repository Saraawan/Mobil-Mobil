<?php
$db_host = 'localhost'; // Change this if your host is different
$db_name = 'shop_db';
$db_user = 'root'; // Change this to your actual database username
$db_pass = ''; // Change this to your actual database password

try {
    $conn = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
