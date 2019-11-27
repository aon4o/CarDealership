<?php
$conn = require_once '../db_conn.php';
require_once '../session.php';
try{
    $stmt = $conn->prepare("delete from brands where id=:id;");
	$stmt->bindParam(':id', $id);
	$id = $_POST['id'];
    $stmt->execute();
    $_SESSION['flash'] = 'Brand succesfully deleted.';
} catch(Throwable $e){
    $_SESSION['flash'] = 'ERROR: The brand wasn not deleted.';
}
header('Location: index.php');
