<?php 
include("conexao.php");
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $nome = $_GET["nome"];
        $cpf = $_GET["cpf"];
        $sala = $_GET["sala"];
        echo "$sala";
        $sql ="INSERT INTO fiscais values(default,'$nome','$cpf', '$sala')";

        if(mysqli_query($mysqli, $sql)){
            echo "Fiscal cadastrado com sucesso";
        }else{
            echo "Erro!" . mysqli_connect_error($mysqli);
        }

        
        mysqli_close($mysqli);
    }

        
?>