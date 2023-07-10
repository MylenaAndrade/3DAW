<?php 
include_once('conexao.php');

if($_SERVER["REQUEST_METHOD"] == "GET"){
    
    $id=$_GET["id"];
    $query = "DELETE FROM candidatos WHERE id = '$id'";
    mysqli_query($mysqli,$query);
    header("location: /3DAW/3DAW/3DAW-AV2/index.php");
    exit;
}
?>