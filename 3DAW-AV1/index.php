<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Jogo Cooperativo</title>
</head>
<body>
<h1 >Listar Disciplinas</h1>
    <a href="criarPergunta.php">+ Criar Pergunta</a>
    <?php
    $arqPerg = fopen("multiplaEscolha.txt", "r");
    $pergunta= fgets($arqPerg);
    ?>

    <form action="">
        <br>
        <?php while(!feof($arqPerg)){
            $resposta = explode(";", fgets($arqPerg));?>
            <label for=""><?php echo $pergunta?></label>
            <br>
            <input type="radio" name="resposta" value="resp1"><?php echo $resposta[0]?>
            <br>
            <input type="radio" name="resposta" value="resp2"><?php echo $resposta[1]?>
            <br>
            <input type="radio" name="resposta" value="resp3"><?php echo $resposta[2]?>
            <br><br>
        <?php $pergunta= fgets($arqPerg);} fclose($arqPerg);?>
        
        
    </form>


</body>
</html>