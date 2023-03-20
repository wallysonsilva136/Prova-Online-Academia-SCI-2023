<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body>
<form action="#" method="post">
        <label for="numeros">Informe 5 numeros:</label><br>
        <input type="number" name="numero1"><br>
        <input type="number" name="numero2"><br>
        <input type="number" name="numero3"><br>
        <input type="number" name="numero4"><br>
        <input type="number" name="numero5"><br>
        <input type="submit" value="Submit">
    </form>  
</body>
</html>
<?php
//if(isset($numero1,$numero2,$numero3,$numero4,$numero5))   {
    //Pego os valores do formulario 
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$numero3 = $_POST['numero3'];
$numero4 = $_POST['numero4'];
$numero5 = $_POST['numero5'];

// function para maior valor dentro de um array
$maior = max(array($numero1, $numero2, $numero3, $numero4, $numero5));
// function para menor valor dentro de um array
$menor = min(array($numero1, $numero2, $numero3, $numero4, $numero5));

echo " O maior numero digitado foi ". $maior;
echo " O menor numero digitado foi ". $menor;

//}


?>