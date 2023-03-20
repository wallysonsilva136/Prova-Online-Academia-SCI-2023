<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
</head>
<body>
<form action="#" method="post">
           <label for="Aluno">Informe nome do aluno 1:</label><br>
            <input type="text" name="nome"><br>
        <label for="numeros">Informe as notas do aluno 1:</label><br>
        <input type="number" name="numero1"><br>
        <input type="number" name="numero2"><br>
        <input type="number" name="numero3"><br>
        <input type="number" name="numero4"><br>
        <br>
        <label for="Aluno">Informe nome do aluno 2:</label><br>
            <input type="text" name="nome2"><br>
            <label for="numeros">Informe as notas do aluno 2:</label><br>
        <input type="number" name="numero5"><br>
        <input type="number" name="numero6"><br>
        <input type="number" name="numero7"><br>
        <input type="number" name="numero8"><br>
        <br>
        <label for="Aluno">Informe nome do aluno 3:</label><br>
            <input type="text" name="nome3"><br>
            <label for="numeros">Informe as notas do aluno 3:</label><br>
        <input type="number" name="numero9"><br>
        <input type="number" name="numero10"><br>
        <input type="number" name="numero11"><br>
        <input type="number" name="numero12"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
// aluno 1 valores post
$nome = $_POST['nome'];
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$numero3 = $_POST['numero3'];
$numero4 = $_POST['numero4'];

// aluno 2 valores post
$nome2 = $_POST['nome2'];
$numero5 = $_POST['numero5'];
$numero6 = $_POST['numero6'];
$numero7 = $_POST['numero7'];
$numero8 = $_POST['numero8'];

// aluno 3 valores post
$nome3 = $_POST['nome3'];
$numero9 = $_POST['numero9'];
$numero10 = $_POST['numero10'];
$numero11 = $_POST['numero11'];
$numero12 = $_POST['numero12'];

// coloco valores dentro de um array aluno1
    $aluno1array = array($nome, $numero1, $numero2, $numero3, $numero4);

// coloco valores dentro de um array aluno2
    $aluno2array = array($nome2, $numero5, $numero6, $numero7, $numero8);

// coloco valores dentro de um array aluno3
    $aluno3array = array($nome3, $numero9, $numero10, $numero11, $numero12);

// média geral de aluno1 
$media = array_sum($aluno1array) / 4;
echo "Média geral do aluno ".$nome." e ".$media.", "; 

// média geral de aluno2 
$media2 = array_sum($aluno2array) / 4;
echo "Média geral do aluno ".$nome2." e ".$media2.", "; 

// média geral de aluno3 
$media3 = array_sum($aluno3array) / 4;
echo "Média geral do aluno ".$nome3." e ".$media3.". "; 


//maior média
if ($media > $media2 && $media > $media3) { 

echo "A maior média foi do aluno ".$nome.". ";
}

if ($media2 > $media && $media2 > $media3) { 

    echo "A maior média foi do aluno ".$nome2.". ";   
}

if ($media3 > $media && $media3 > $media2) { 
    echo "A maior média foi do aluno ".$nome3.". "; 
    }

//menor média
if ($media < $media2 && $media < $media3) { 

    echo "A menor média foi do aluno ".$nome.". ";
    }
    
    if ($media2 < $media && $media2 < $media3) { 
    
        echo "A menor média foi do aluno ".$nome2.". ";   
    }
    
    if ($media3 < $media && $media3 < $media2) { 
        echo "A menor média foi do aluno ".$nome3.". "; 
        }




?>