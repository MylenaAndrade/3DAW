<?php

include_once('conexao.php');

$query = "SELECT nome,cpf,identidade,email,cargo,sala, id FROM candidatos ORDER BY nome";

$result = mysqli_query($mysqli,$query);
	
	if($result){
		
	
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Concurso KeyFalls</title>
</head>
<body>
<h1 >Concurso KeyFalls</h1>
	<a href="incluirCandidato.html">Inscrever Candidato</a>
    <a href="incluirFiscal.html">Inscrever Fiscal</a>
    <table>
    	<tr>
          <td>Nome</td>
          <td>CPF</td>
          <td>Identidade</td>
          <td>Email</td>
          <td>Cargo Pretendido</td>
        </tr>
        <?php 
            while($row = mysqli_fetch_array($result)){
                    $nome = $row["nome"];
                    $cpf = $row["cpf"];
                    $identidade = $row["identidade"];
                    $email = $row["email"];
                    $cargo = $row["cargo"];
                    $sala = $row["sala"];
                    $id = $row["id"];
        ?> 
        <tr>
        <th><?php echo "$nome"?></th>
        <th><?php echo "$cpf"?></th>
        <th><?php echo "$identidade"?></th>
        <th><?php echo "$email"?></th>
        <th><?php echo "$cargo"?></th>
        <th><?php echo "$sala"?></th>
        <th>
            <a href="alterarSala.php">Alterar Sala</a>
            <a href="removerCandidato.php?id=<?php echo $id?>">Remover</a>
        </th>
        </tr>
        <?php
            }
        }
            ?>       
    </table>


</body>
</html>