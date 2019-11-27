<?php
$conn = require_once '../db_conn.php';
require_once '../session.php';
try{
    $stmt = $conn->prepare("insert into brands(name) values(:name);");
    $stmt->bindParam(':name', $name);
    $name = $_POST['name'];
    $stmt->execute();
    $_SESSION['flash'] = 'Brand succesfully added.';
} catch(Throwable $e){
    $_SESSION['flash'] = 'ERROR: The brand wasn not added.';
}
header('Location: index.php');
