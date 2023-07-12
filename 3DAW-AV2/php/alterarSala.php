<?php 
    include_once('conexao.php');
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $cpf=$_GET["cpf"];
        $sala = $_GET["sala"];
        
        $query = "UPDATE candidatos SET sala = '$sala' WHERE cpf = '$cpf'";
        mysqli_query($mysqli, $query);
        mysqli_close($mysqli);
        header("location: /Trabalhos/3DAW/3DAW/3DAW-AV1/php/index.php");
        exit;
    }
?>