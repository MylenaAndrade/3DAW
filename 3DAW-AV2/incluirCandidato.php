<?php 
include("conexao.php");
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $nome = $_GET["nome"];
        $cpf = $_GET["cpf"];
        $identidade = $_GET["identidade"];
        $email = $_GET["email"];
        $cargo = $_GET["cargo"];
        $sala = $_GET["sala"];

        $sql ="INSERT INTO candidatos values(default,'$nome','$cpf','$identidade','$email', '$cargo', '$sala')";

        if(mysqli_query($mysqli, $sql)){
            echo "Pergunta cadastrada com sucesso";
        }else{
            echo "Erro!" . mysqli_connect_error($mysqli);
        }

        
        mysqli_close($mysqli);
    }

        
?>