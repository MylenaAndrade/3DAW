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
        <?php if(file_exists("perguntasRespostas.txt")){
            $arqPerg = fopen("perguntasRespostas.txt", "r");
            $pergunta= explode(";", fgets($arqPerg));
            $resp[]= 0; $x =0; 
            while(!feof($arqPerg)){
            if($pergunta[1] == -1){
                $pergunta= explode(";", fgets($arqPerg))?>
                <label for=""><?php echo $x+1 . ") " . $pergunta[1]?></label>
                <br><br>
                <textarea name="discursiva" id="discursiva" cols="20" rows="3"></textarea>
                <br><br>
                <a class="botao-alterar" href="alterarPergunta.html?id=<?php echo $pergunta[0]?>">Alterar</a>
                <a class="botao-remover" href="removerPergunta.php?id=<?php echo $pergunta[0]?>">Remover</a>
                <br><br>
           <?php }else{ 
                $resposta = explode(";", fgets($arqPerg));?>
                <label for=""><?php echo $x+1 . ") " . $pergunta[1]?></label>
                <br><br>
                <div class="multipla-escolha">
                    <input type="radio" name="<?php echo $resp[$x]?>" value="resp1"><?php echo $resposta[1]?>
                    <br>
                    <input type="radio" name="<?php echo $resp[$x]?>" value="resp2"><?php echo $resposta[2]?>
                    <br>
                    <input type="radio" name="<?php echo $resp[$x]?>" value="resp3"><?php echo $resposta[3]?>
                    <br><br>
                </div>
                    <a class="botao-alterar" href="alterarPergunta.html?id=<?php echo $resposta[0]?>">Alterar</a>
                    <a class="botao-remover" href="removerPergunta.php?id=<?php echo $resposta[0]?>">Remover</a>
                    <br><br>
                
        <?php } ; $x++; $resp[$x]=$x; $pergunta = explode(";", fgets($arqPerg));
    } fclose($arqPerg); }else{echo "NÃO EXISTE PERGUNTAS!";}
    ?>
            <br>
            <input class="botao-enviar" type="submit" value="Enviar">
        
    </form>


</body>
</html>