<?php
include 'db.php';

$id = $_GET['id'];
$conn->query("DELETE FROM clients WHERE id=$id");

header("Location: clients.php");
?>

