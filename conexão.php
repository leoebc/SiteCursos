<?php
function getConnection(){
$dsn='mysql:dbname=dbphp7;host=localhost';
$user='root';
$pass='123';
try
{
    $conn = new PDO($dsn,$user,$pass);
    echo "Conectado";
	echo "<br>---------------<br>";
        return $conn;
}
catch ( PDOException $e )
{
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}

}

?>