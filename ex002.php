<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
  padding: 5px;
  text-align: center;
}

body{
  background-color: violet;
  color: white;
}

h2{
  text-align: center;
}

</style>
<body>

<h2>Tabela de Notas</h2>

<table style="width:100%">
  <tr>
    <th>NOME</th>
    <th>NOTAS</th>
    <th>STATUS</th>
  </tr>
	<?php
      $nomes = array("Jose", "Neusa", "Antonio", "Erika", "Tiago", "Chico");
      $notas = array(7.5,7.8,7.1,8.0,8.5,7.7);

      for($i=0; $i<count($nomes); $i++){
        echo("<tr>");
        
        echo("<td> $nomes[$i] </td>");
        echo("<td> $notas[$i] </td>");

          if($notas[$i]>=8){
            echo("<td>" . "APROVADO" . "</td>");
          }else{
            echo("<td> REPROVADO </td>");
          }

        echo("</tr>");

      }
	?>

</table>

</body>
</html>
