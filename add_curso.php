<?php
include './conexão.php';

session_start();

$var = $_POST['id_curso'];
$id = $_SESSION['id'];

//echo $var;
//echo $_SESSION['id']; 

$conn=  getConnection();
$sql="INSERT INTO tb_usuario_curso (nome_curso, id_usuario, status) VALUES ('$var', '$id', 'aberto')";
//$query = $conn->prepare($sql);
$stmt = $conn->prepare($sql);
$stmt->execute();

header('Location: home.php');
    exit();

/*
if ( ! empty( $_POST ) ) {
    $id_usuario = $_POST['id_usuario'];
    $nome_curso = $_POST['id_curso'];
   
$query->bindParam(":id_usuario",$id_usuario);
$query->bindParam(":id_curso",$id_curso);
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
*/
?>




