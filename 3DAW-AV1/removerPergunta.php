<?php 
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
    header("location: /Trabalhos/3DAW/3DAW-AV1/index.php");
    exit;
}
?>