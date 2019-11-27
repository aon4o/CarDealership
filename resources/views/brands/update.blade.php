<?php
$conn = require_once '../db_conn.php';
require_once '../session.php';
try{
    $stmt = $conn->prepare("update brands set name=:name where id=:id;");
	$stmt->bindParam(':name', $name);
    $stmt->bindParam(':id', $id);
	$name = $_GET['name'];
    $id = $_GET['id'];
    $stmt->execute();
    $_SESSION['flash'] = 'Brand succesfully updated.';
} catch(Throwable $e){
    $_SESSION['flash'] = 'ERROR: The brand wasn not updated.';
}
header('Location: index.php');
