<?php
include './conexão.php';

session_start();

$var = $_POST['id_relacao'];
$id = $_SESSION['id'];
$nome_usuario = $_SESSION['nome'];

echo $var;
echo $_SESSION['id']; 

$conn=  getConnection();
$sql="UPDATE tb_usuario_curso SET status = 'concluido' WHERE nome_curso = '{$var}' AND id_usuario = '{$id}'";
//$query = $conn->prepare($sql);
$stmt = $conn->prepare($sql);
$stmt->execute(); 


?>

 <html>
<form action="certificado.php" method="post">
    <button name="botao" value="<?php echo $var; ?>" type="submit" onclick="window.location.href = 'certificado.php' ">Gerar certificado</button>
</form>       
</html> 



