<?php
//include './select.php';
//----------------------------------------------------------------------------


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
        $_SESSION['login'] =$row['nome'];
        $_SESSION['id'] =$row['id'];//teste
        if($row['perfil']=="Admin"){
    header('Location: home_admin.php');
 //   $_SESSION['login'] =$row['nome'];
    $conn=NULL;
        exit();}
} else {
    header('Location: cadastro.html');
    exit();
}

	echo "=========================================================<br>";
}


//----------------------------------------------------------------------------
echo $_SESSION['login'];
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container" >
            <h2>Bem vindo, <?php echo $_SESSION['login'];?>! </h2>
            <div class="row">
                
                <div class="col-md-6">
                    
                    <h1>Verifique seus cursos</h1>
                </div>
                <div class="col-md-6">
                    <h1>Adicione outros cursos</h1>
<form action="add_curso.php" method="post">
    <select name="id_curso" id="dropdown">
        
        
<?php
    //include './conexão.php';
    $conn=  getConnection();  
    $sql="SELECT *FROM tb_cursos";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    while($row=$stmt->fetch()) {
        echo("<option value='".$row['curso']."'>".$row['curso']."</option>");
    }
?>
        
        
        <label for="dropdown">Select</label>
    </select>
    <button type="submit">Submit</button>
</form>       
        <script src="bootstrap/js/jquery-2.1.4.min.js" type="text/javascript"></script>
        </div>
                </div>
            <div class="row">
                <div class="col-md-6">
                     <?php /*
                        $id = $_SESSION['id'];
                        $sql="SELECT * FROM tb_usuario_curso WHERE id_usuario = '{$id}'";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        while($row=$stmt->fetch()) {
                            echo("<option value='".$row['id']."'>".$row['nome_curso']."</option>");
                        } */
                    ?>
                    <a href="cursos_ativos.php">Cursos ativos</a>
                </div>
                
            </div>
        </div>
    </body>
</html>