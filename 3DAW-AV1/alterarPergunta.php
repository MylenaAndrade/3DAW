<?php 
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

        $pergunta = $_GET["pergunta"];
        $resposta1 = $_GET["resposta1"];
        $resposta2 = $_GET["resposta2"];
        $resposta3 = $_GET["resposta3"];

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
