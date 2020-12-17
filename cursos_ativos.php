 <?php 
 include './conexão.php';
 session_start();
 
/*    $conn=  getConnection(); 
    $id = $_SESSION['id'];
    $sql="SELECT * FROM tb_usuario_curso WHERE id_usuario = '{$id}'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    while($row=$stmt->fetch()) {
        echo("<option value='".$row['id']."'>".$row['nome_curso']."</option>");
        
    } 
 */
 
?>
 <html><head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container" >
            <h2>Concluir curso</h2>
            <div class="row">
                
                <div class="col-md-6">
                    
                    <h1>Gerar certificado</h1>
                </div>
<form action="conclui_curso.php" method="post">
    <select name="id_relacao" id="dropdown">
        
        
<?php 
    //include './conexão.php';
    $id = $_SESSION['id'];
    $conn=  getConnection();  
    $sql="SELECT *FROM tb_usuario_curso WHERE id_usuario = '{$id}' AND status != 'concluido'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    while($row=$stmt->fetch()) {
        echo("<option value='".$row['nome_curso']."'>".$row['nome_curso']."</option>");
    } 
?>
        
        
        <label for="dropdown">Select</label>
    </select>
    <button type="submit">Submit</button>
</form>       
</html> 

