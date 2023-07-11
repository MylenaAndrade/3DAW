<?php

include_once('conexao.php');

$query = "SELECT sala FROM candidatos UNION SELECT sala FROM fiscais ORDER BY sala;";

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
    <?php 
            while($row = mysqli_fetch_array($result)){
                $sala = $row["sala"];
                 echo "Sala $sala";

                 $query = "SELECT nome FROM fiscais WHERE sala = '$sala' ORDER BY nome;";

                 $fiscais = mysqli_query($mysqli,$query);
             ?> 
             <h2> Fiscais: </h2>
                <?php  while($coluna = mysqli_fetch_array($fiscais)){
                    $nome = $coluna["nome"];
                    echo"$nome "; }?>

        <?php 
                $query = "SELECT id,nome,cpf FROM candidatos WHERE sala = '$sala' ORDER BY nome;";

                $candidatos = mysqli_query($mysqli,$query);
                while($coluna = mysqli_fetch_array($candidatos)){
                    $nome = $coluna["nome"];
                    $cpf = $coluna["cpf"];
                    $id = $coluna["id"];?>
    <table>
    	<tr>
          <td>Nome</td>
          <td>CPF</td>
        </tr>
        <tr>
        <th><?php echo "$nome"?></th>
        <th><?php echo "$cpf"?></th>
        <th>
            <a href="alterarSala.php">Alterar Sala</a>
            <a href="removerCandidato.php?id=<?php echo $id?>">Remover</a>
        </th>
        </tr>
        </table>
        <?php
            }
        }
    }
            ?>       


</body>
</html>