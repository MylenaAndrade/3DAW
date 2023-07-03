<?php

include_once('conexao.php');

$query = "SELECT pergunta,discursiva,opcao_a,opcao_b,opcao_c, id FROM perguntas";

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
    <title>Jogo Cooperativo</title>
</head>
<body>
<h1 >Listar Perguntas</h1>
    <a class="criar-pergunta" href="criarPergunta.html">+ Criar Pergunta</a>
    <form action="">
        <br>
        <?php 
            while($row = mysqli_fetch_array($result)){
                    $pergunta = $row["pergunta"];
                    $id = $row["id"];
        ?>  
                <label for=""><?php echo $pergunta;?></label>
                <br>
                <?php 
                    $disc = $row["discursiva"];
                    if($disc == 'S'){
            ?>
                <input type="text" name="discursiva" id="discursiva">
                <br><br>
                <?php }else{ 
                    $opA = $row["opcao_a"];
                    $opB = $row["opcao_b"];
                    $opC = $row["opcao_c"];?>
                    <input type="radio" name="<?php echo $pergunta?>" value="resp1"><?php echo $opA?>
                    <br>
                    <input type="radio" name="<?php echo $pergunta?>" value="resp2"><?php echo $opB?>
                    <br>
                    <input type="radio" name="<?php echo $pergunta?>" value="resp3"><?php echo $opC?>
                    <br><br>
                    <?php } ?>
                <a class="botao-alterar" href="alterarPergunta.html?id=<?php echo $id?>">Alterar</a>
                <a class="botao-remover" href="removerPergunta.php?id=<?php echo $id?>">Remover</a>
                <br><br>
   
                    
            <?php
            }
        }
            ?>        
                
            <br>
            <input class="botao-enviar" type="submit" value="Enviar">
        
    </form>


</body>
</html>
