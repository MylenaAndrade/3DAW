<?php 
include("conexao.php");
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $pergunta = $_GET["pergunta"];
        $resposta1 = $_GET["resposta1"];
        $resposta2 = $_GET["resposta2"];
        $resposta3 = $_GET["resposta3"];
        $resposta4 = $_GET["resposta4"];
        $discursiva = "";

        if($resposta1 == ""){
            $discursiva = "S";
        }else{
            $discursiva = "N";
        }

        $sql ="INSERT INTO perguntas values(default,'$pergunta','$discursiva','$resposta4','$resposta1', '$resposta2', '$resposta3')";

        if(mysqli_query($mysqli, $sql)){
            echo "Pergunta cadastrada com sucesso";
        }else{
            echo "Erro!" . mysqli_connect_error($mysqli);
        }

        
        mysqli_close($mysqli);
    }

        
?>