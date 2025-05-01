<?php
$host = "sql107.infinityfree.com";         // Found at top in phpMyAdmin
$username = "if0_38877836";                // Your InfinityFree username
$password = "P1yush567";          // Your actual hosting account password
$database = "if0_38877836_piyush";         // Full database name with prefix

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
