<?php 
    $pergunta = "";
    $resposta1 = "";
    $resposta2 = "";
    $resposta3 = "";
    $multipla = "";
    $id = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $pergunta = $_POST["pergunta"];
        $resposta1 = $_POST["resposta1"];
        $resposta2 = $_POST["resposta2"];
        $resposta3 = $_POST["resposta3"];
        $id = $_POST["id"];

        if(!file_exists("perguntasRespostas.txt")){
                $arqPerg = fopen("perguntasRespostas.txt", "w") or die("erro ao criar arquivo");
                if($resposta1 == ""){
                    $linha = $id. ";" . "-1". "\n" . $id . ";" . $pergunta;
                }else{
                    $linha = $id. ";". $pergunta . "\n" . $id .";".$resposta1 . ";" . $resposta2 . ";" . $resposta3;
                }
        }else{
            $arqPerg = fopen("perguntasRespostas.txt", "a");
            if($resposta1 == ""){
                $linha = "\n". $id. ";" . "-1". "\n" . $id. ";" . $pergunta;
            }else{
                $linha = "\n". $id. ";" . $pergunta . "\n" . $id .";".$resposta1 . ";" . $resposta2 . ";" . $resposta3;
            }
        }
            fwrite($arqPerg, $linha);
            fclose($arqPerg);

        header("location: /Trabalhos/3DAW/3DAW-AV1/index.php");
        exit;
        
    }

        
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Criar Perguntas</title>
</head>
<body>
    <form action="criarPergunta.php" method="POST">
        <h1>Crie sua pergunta</h1>
        <label for="">Digite o id: </label>
        <br>
        <input type="text" name="id">
        <br><br>
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
        <input class="botao-perguntas" type="submit" value="Criar Perguntas">
    </form>
</body>
</html>