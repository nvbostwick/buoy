<?php
include('database.php'); 
$id = (int) $_GET['id']; 
$sql = "DELETE FROM `device_kind` WHERE `id` = ? "; 
$pdo = Database::connect();
$q = $pdo->prepare($sql);
$q->execute(array($id));

Database::disconnect();
?> 

<a href='listDeviceKind.php'>Back To Listing</a>