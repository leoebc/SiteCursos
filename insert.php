<?php
include './conexão.php';

$conn=  getConnection();
$sql="INSERT INTO tb_usuarios (nome,login,pass,perfil) VALUES (:nome,:login,:pass,:perfil)";
$query = $conn->prepare($sql);

if ( ! empty( $_POST ) ) {
    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $perfil = $_POST['perfil'];
    

$query->bindParam(":nome",$nome);
$query->bindParam(":login",$login);
$query->bindParam(":pass",$pass);
$query->bindParam(":perfil",$perfil);
$result = $query->execute();
if (!$result)
{
		var_dump($query->errorInfo());
		exit;
}
else{
	echo "\n INSERIDO";
        
}

}?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <a href="index.html">Entrar</a>
</html>



