<?php 
    $pergunta = "";
    $resposta1 = "";
    $resposta2 = "";
    $resposta3 = "";
    $multipla = "";
    $id = "";

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        
        $id=$_GET["id"];
        $arqPerg = fopen("perguntasRespostas.txt", "r");
        $arquivoNovo = "";
        $arquivoNomeVelho = "perguntasResposta.txt";
        $arquivoNomeNovo ="perguntasRespostas.txt";
        while(!feof($arqPerg)){
            $linhas[] = fgets($arqPerg);
        }

        fclose($arqPerg);
        
        foreach($linhas as $linha){
            $colunaDados = explode(";", $linha);
            if($colunaDados[0] != $id){
                if(!file_exists("perguntasResposta.txt")){
                    $arquivoNovo = fopen("perguntasResposta.txt", "w") or die("erro ao criar arquivo");
                    fwrite($arquivoNovo, $linha);
                    fclose($arquivoNovo);
                }else{
                    $arquivoNovo = fopen("perguntasResposta.txt", "a");
                    fwrite($arquivoNovo,$linha);
                    fclose($arquivoNovo);
                }
                
            }
        }

        unlink("perguntasRespostas.txt");
        rename($arquivoNomeVelho, $arquivoNomeNovo);

    }else{
        $pergunta = $_POST["pergunta"];
        $resposta1 = $_POST["resposta1"];
        $resposta2 = $_POST["resposta2"];
        $resposta3 = $_POST["resposta3"];
        $id = $_POST["id"];

        $arqPerg = fopen("perguntasRespostas.txt", "a");

        if($resposta1 == ""){
            $linha = "\n" . $id. ";" . "-1". "\n" . $id . ";" . $pergunta;
        }else{
            $linha = "\n" . $id. ";". $pergunta . "\n" . $id .";".$resposta1 . ";" . $resposta2 . ";" . $resposta3;
        }
        fwrite($arqPerg,$linha);
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
    <title>Alterar Pergunta</title>
</head>
<body class="inserir-aluno">
<form method="POST">
    <h1 class="inserir-aluno-titulo"><h1>Alterar Aluno</h1></h1>
    <label for="">ID: </label>
    <br>
    <input type="text" name="id" readonly value=<?php echo "'" . $id . "'"?>>
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
    <h3>Caso não: </h3>
    <br>  
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
    <input class="botao-perguntas" type="submit" value="Alterar Pergunta">
    
    </form>
</body>
</html>