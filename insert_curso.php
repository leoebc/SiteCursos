<?php
include './conexão.php';

$conn=  getConnection();
$sql="INSERT INTO tb_cursos (curso) VALUES (:curso)";
$query = $conn->prepare($sql);

if ( ! empty( $_POST ) ) {
    $curso = $_POST['curso'];
    
$query->bindParam(":curso",$curso);
$result = $query->execute();
if (!$result)
{
		var_dump($query->errorInfo());
		exit;
}
else{
	echo "\n INSERIDO";
}

}




