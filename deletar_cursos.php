<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Deletar Cursos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body style="background-color: aliceblue">
        <div class="container" style="background-color:aliceblue;padding-top: 50px" >
            <h1>Deletar Cursos</h1>
<form action="delete_curso.php" method="post">
    <div class="form-group">
        
    <select class="form-control" id="curso" name="curso">
      <!--  <option value="" selected=selected></option>
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option> -->
        <?php
            include './conexão.php';
            $conn=  getConnection();  
            $sql="SELECT *FROM tb_cursos";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            while($row=$stmt->fetch()) {
                echo("<option value='".$row['id']."'>".$row['curso']."</option>");
            }
        ?>
        
        
      <!--  <label for="dropdown">Select</label> -->
    </select>
  </div>   
        <input type="submit" name="deletar" value="Deletar"/>
        <br><br>
</form></div> 
                       
        <script src="bootstrap/js/jquery-2.1.4.min.js" type="text/javascript"></script>
    </body>
</html>
