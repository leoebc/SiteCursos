<?php
include './conexão.php';

$conn=  getConnection();
$id =1;
$sql="DELETE FROM tb_usuarios WHERE id = :id";
$query = $conn->prepare($sql);

$query->bindParam(':id',$id);

$result = $query->execute();


if (!$result)
{
		var_dump($query->errorInfo());
		exit;
}
else{
	echo "\n DELETADO";
}



?>

