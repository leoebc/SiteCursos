<?php
include './conexão.php';

$var = $_POST['curso'];
echo $var;


$conn=  getConnection();
$sql="DELETE FROM tb_cursos WHERE id = '{$var}'";
$stmt = $conn->prepare($sql);
$stmt->execute(); 

/* if ( ! empty( $_POST ) ) {
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

} */
?>

