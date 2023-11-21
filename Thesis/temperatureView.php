<?php
require "connection.php";

$sql = "SELECT * FROM mlxdata ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);
$temp = mysqli_fetch_assoc($result);
?>

<span><?= $temp['temperature'] ?>°</span>