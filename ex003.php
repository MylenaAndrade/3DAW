<?php
$nome = "";
$sigla = "";
$carga = "";
$linha = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST["Nome"];
    $sigla = $_POST["Sigla"];
    $carga = $_POST["Carga"];
 
    echo "Nome: " . $nome . " Sigla: " . $sigla . " Carga: " . $carga;

    if(!file_exists("disciplina.txt")){
        $arqDisc = fopen("disciplina.txt", "w") or die("erro ao criar arquivo");
        $linha = "nome;sigla;carga\n";
        fwrite($arqDisc, $linha);
        fclose($arqDisc);
    }
    
    $arqDisc = fopen("disciplina.txt", "a") or die("erro ao criar arquivo");
    $linha = $nome . ";" . $sigla . ";" . $carga . "\n";
    fwrite($arqDisc,$linha);
    fclose($arqDisc);
}



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>3DAW</title>
</head>
<body>
    <h1>Criar Nova Disciplina</h1>
    <form action="index2.php" method="POST">
    Nome: <input type="text" name="Nome">
    <br><br>
    Sigla: <input type="text" name="Sigla">
    <br><br>
    Carga Horaria: <input type="text" name="Carga">
    <br><br>
     <input type="submit" value="Criar Nova Disciplina">
    
    </form>
</body>
</html>
