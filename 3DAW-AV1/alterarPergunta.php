<?php 
    include_once('conexao.php');
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        
        $id=$_GET["id"];
        echo 'oi';
        $pergunta = $_GET["pergunta"];
        $resposta1 = $_GET["resposta1"];
        $resposta2 = $_GET["resposta2"];
        $resposta3 = $_GET["resposta3"];
        $resposta4 = $_GET["resposta4"];
        if(($resposta1 == "") && ($resposta2 == "") && ($resposta3 == "") && ($resposta4 == "")){
             $discursiva = "S";
         }else{
             $discursiva = "N";
             if($pergunta == ""){
                $query = "SELECT pergunta FROM perguntas where id = '$id'";
                 $pergunta = mysqli_query($mysqli,$query);
             }
             if($resposta1 == ""){
                 $query = "SELECT opcao_a FROM perguntas where id = '$id'";
                 $resposta1 = mysqli_query($mysqli,$query);
             }

             if($resposta2 == ""){
                 $query = "SELECT opcao_b FROM perguntas where id = '$id'";
                 $resposta2 = mysqli_query($mysqli,$query);
             }

             if($resposta3 == ""){
                 $query = "SELECT opcao_c FROM perguntas where id = '$id'";
                 $resposta3 = mysqli_query($mysqli,$query);
             }

             if($resposta4 == ""){
                 $query = "SELECT respMult FROM perguntas where id = '$id'";
                 $resposta3 = mysqli_query($mysqli,$query);
             }

            }
            $query = "UPDATE perguntas SET pergunta = '$pergunta' , discursiva = '$discursiva' , respMult = '$resposta4' , opcao_a = '$resposta1', opcao_b = '$resposta2' , opcao_c = '$resposta3' WHERE id = '$id'";
            mysqli_query($mysqli, $query);
            mysqli_close($mysqli);
        header("location: /Trabalhos/3DAW/3DAW/3DAW-AV1/index.php");
        exit;
    }
?>
