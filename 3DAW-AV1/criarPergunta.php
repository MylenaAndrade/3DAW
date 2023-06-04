<?php 
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $pergunta = $_GET["pergunta"];
        $resposta1 = $_GET["resposta1"];
        $resposta2 = $_GET["resposta2"];
        $resposta3 = $_GET["resposta3"];
        $id = $_GET["id"];
        echo $pergunta;
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

            header("location: /3DAW/3DAW/3DAW-AV1/index.php");
            exit;
        
    }

        
?>