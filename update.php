<?php

include './conexão.php';
$conn=  getConnection();
$sql="UPDATE tb_usuarios SET pass = :pass, login = :login WHERE id = :id";

$query = $conn->prepare($sql);

$login = "zzzz";
$pass = "vvvv";
$id= 3;

$query->bindParam(":login",$login);
$query->bindParam(":pass",$pass);
$query->bindParam(":id",$id);


$result = $query->execute();


if (!$result)
{
		var_dump($query->errorInfo());
		exit;
}
else{
	echo "\n ATUALIZADO";
}



?>
