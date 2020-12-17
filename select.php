<?php
session_start();
include './conexão.php';
$conn=  getConnection();
if ( ! empty( $_POST ) ) {
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    
$sql="SELECT * FROM tb_usuarios WHERE login = '{$login}' AND pass = '{$pass}'";
$stmt = $conn->prepare($sql);
$stmt->execute(); 
$row=$stmt->fetch();
    if ($row>0) {
        $_SESSION['login'] =$row['nome']; //teste
        if($row['perfil']=="Usuario"){
    header('Location: home.php');
 //   $_SESSION['login'] =$row['nome'];
    $conn=NULL;
        exit();}else{header('Location: home_admin.php');
    exit();}
} else {
    header('Location: cadastro.html');
    exit();
}

	echo "=========================================================<br>";
}


