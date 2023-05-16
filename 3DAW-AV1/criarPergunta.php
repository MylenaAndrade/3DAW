<?php 
    $pergunta = "";
    $resposta1 = "";
    $resposta2 = "";
    $resposta2 = "";
    $discursiva = " ";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $pergunta = $_POST["pergunta"];
        $resposta1 = $_POST["resposta1"];
        $resposta2 = $_POST["resposta2"];
        $resposta3 = $_POST["resposta3"];
        $discursiva = $_POST["sim"];

        if($discursiva == "sim"){
            if(!file_exists("discursiva.txt")){
                $arqDisc = fopen("discursiva.txt", "w") or die("erro ao criar arquivo");
                $linha = $pergunta;
            }else{
                $arqDisc = fopen("discursiva.txt", "a");
                $linha = "\n".$pergunta;
            }
        }else{
            if(!file_exists("multiplaEscolha.txt")){
                $arqDisc = fopen("multiplaEscolha.txt", "w") or die("erro ao criar arquivo");
                $linha = $pergunta . "\n" . $resposta1 . ";" . $resposta2 . ";" . $resposta3;
            }else{
                $arqDisc = fopen("multiplaEscolha.txt", "a");
                $linha = "\n".$pergunta . "\n" . $resposta1 . ";" . $resposta2 . ";" . $resposta3;
            }
        }
        
        
        fwrite($arqDisc, $linha);
        fclose($arqDisc);

        header("location: /Trabalhos/3DAW-AV1/index.php");
        exit;

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Perguntas</title>
</head>
<body>
    <form action="criarPergunta.php" method="POST">
        <label for="">Digite sua pergunta</label>
        <br>
        <input type="text" name="pergunta">
        <br><br>
        <label for="">Gostaria que ela fosse discursiva? </label>
        <br>
        <input type="radio" name="resposta" value="sim">Sim
        <br>
        <input type="radio" name="resposta" value="nao">Não
        <br><br>
        <a href="criarPergunta.php" type="submit">Salvar</a>
        
        <label for="">Digite a primeira resposta: </label>
        <br>
        <input type="text" name="resposta1">
        <br><br>
        <label for="">Digite a segunda resposta: </label>
        <br>
        <input type="text" name="resposta2">
        <br><br>
        <label for="">Digite a terceira resposta: </label>
        <br>
        <input type="text" name="resposta3">
        <br><br>
        <input type="submit" value="Criar Perguntas">
    </form>
</body>
</html>