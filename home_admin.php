<?php
//session_start();
include './select.php';
?>
<h2>Bem vindo, <?php echo $_SESSION['login'];?></h2>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h2>Admin:</h2>
        <a href="cadastrar_cursos.html">Cadastrar novos cursos</a>
        <div></div>
        <a href="deletar_cursos.php">Deletar cursos</a>
    </body>
</html>