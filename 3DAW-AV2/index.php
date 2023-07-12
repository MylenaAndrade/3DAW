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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ysabeau+Infant:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Concurso KeyFalls</title>
</head>
<body>
<h1 >CONCURSO KEYFALLS</h1>
    <div class="inscrever">
        <a href="incluirCandidato.html">Inscrever Candidato</a>
        <a href="incluirFiscal.html">Inscrever Fiscal</a>
    </div>
    <br>
    <?php 
            while($row = mysqli_fetch_array($result)){
                $sala = $row["sala"];
                ?>

                 <h2>Sala: <?php echo "$sala"?></h2>
            <?php
                 $query = "SELECT nome FROM fiscais WHERE sala = '$sala' ORDER BY nome;";

                 $fiscais = mysqli_query($mysqli,$query);
             ?> 
             <h3> Fiscais: </h3>
                <?php  while($linha = mysqli_fetch_array($fiscais)){
                    $nome = $linha["nome"];
                    echo"$nome "; }?>
        <div class="tabela"> 
        <table>
        <tr>
          <td>Nome</td>
          <td>CPF</td>
          <td>Identidade</td>
          <td>Email</td>
          <td>Cargo Pretendido</td>
          <td>Ação</td>
        </tr>
        <?php 
                $query = "SELECT id,nome,cpf,identidade,email,cargo FROM candidatos WHERE sala = '$sala' ORDER BY nome;";

                $candidatos = mysqli_query($mysqli,$query);
                while($linha = mysqli_fetch_array($candidatos)){
                    $nome = $linha["nome"];
                    $cpf = $linha["cpf"];
                    $identidade = $linha["identidade"];
                    $email = $linha["email"];
                    $cargo = $linha["cargo"];
                    $id = $linha["id"];?>
                   
        <tr>
        <th><?php echo "$nome"?></th>
        <th><?php echo "$cpf"?></th>
        <th><?php echo "$identidade"?></th>
        <th><?php echo "$email"?></th>
        <th><?php echo "$cargo"?></th>
        <th>
            <a href="alterarSala.html?cpf=<?php echo $cpf?>"><img src="img/lapis.png" alt="Alterar Sala"></a>
            <a href="removerCandidato.php?id=<?php echo $id;?>"><img src="img/lixo.png" alt="Remover Candidato"></a>
        </th>
        </tr>
        <?php
    }?>
        </table>
             
        </div>
        <?php
        }
    }
            ?>       



</body>
</html>