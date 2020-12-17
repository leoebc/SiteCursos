<?php
include './conexão.php';
$conn=  getConnection();

$conn->beginTransaction();

$id =2;

$query = $conn->prepare("DELETE FROM tb_usuarios WHERE id = ?");


$query->execute(array($id));

//$conn->rollback();

$conn->commit();




?>
