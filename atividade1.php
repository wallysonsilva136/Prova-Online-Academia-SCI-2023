<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
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

// coloco valores dentro de um array
    $numerosarray = array($numero1, $numero2, $numero3, $numero4, $numero5);
   // Pecorre o array
        foreach ($numerosarray as $numeros){
            // se resto da divisão por 2 e igual a 0 Par senão impar
            if ($numeros % 2 == 0) { 
            // for ($i = 0; $i == $numeros; $i++){
            echo "O Número é par: $numeros<br />";   
            
            } else{
                echo "O Número é impar: $numeros<br />";
            } 
        }
// média geral de todos os numeros digitados 
    $media = ($numero1 + $numero2 + $numero3 + $numero4 + $numero5) / 5;
    echo "Média geral desses números e ". $media; 

//}
?>