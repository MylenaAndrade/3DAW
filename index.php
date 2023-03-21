<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro Exercício</title>
</head>
<body>
    <h1>TESTANDO A ESTRUTURA DE REPETIÇÃO 'FOR'</h1>
    <?php 
        $carros = ["Fusca", "Opala", "Dodge", "Corcel"];
        $precos = ["4545.11", "6545.22", "8798.33", "2332.44"];
        $aux = count($carros);
        
        for($i=0; $i<$aux; $i++){
            echo "Meu carro é: " . $carros[$i];
            echo "<br>";
        }
    ?>
</body>
</html>
