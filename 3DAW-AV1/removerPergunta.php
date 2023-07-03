<?php 
include_once('conexao.php');

if($_SERVER["REQUEST_METHOD"] == "GET"){
    
    $id=$_GET["id"];
    $query = "DELETE FROM perguntas WHERE id = '$id'";
    mysqli_query($mysqli,$query);
    header("location: /3DAW/3DAW/3DAW-AV1/index.php");
    exit;
}
?>