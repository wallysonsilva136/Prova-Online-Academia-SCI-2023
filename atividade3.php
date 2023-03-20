<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body>
    <?php
$repetir = 0;

 do {
      //if (isset($nome,$numero1,$numero2,$numero3,$numero4)) { 
     
    ?>
    <form action="#" method="post">
            <label for="Aluno">Informe nome do aluno:</label><br>
            <input type="text" name="nome"><br>
            <label for="Notas">Informe as 4 notas do aluno:</label><br>
            <input type="number" name="numero1"><br>
            <input type="number" name="numero2"><br>
            <input type="number" name="numero3"><br>
            <input type="number" name="numero4"><br>
            <?php
            if (!empty($_POST['nome'])) {             
         ?>
            <label for="Aluno">Quer continuar?</label><br>
            <input type="submit" name="Sim" value="Sim">
            <input type="submit" name="No" value="Não">
        <?php
         } else { 
        ?>
        <input type="submit" value="Calcular">
       <?php
         } 
        ?>

    </form> 
    <?php
    // }// else { 
          
        //Pego os valores do formulario 
        $nome = $_POST['nome'];
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];
        $numero4 = $_POST['numero4'];
        
            // calcula media
            $media = ($numero1 + $numero2 + $numero3 + $numero4) / 4;
            echo "A media do aluno ".$nome." e ".$media;
             
            if ($media >= 6){ 
               echo " Aprovado";  

            } else { 
                echo " Reprovado";
            }

            
                if (isset($_POST['Sim'])){
                    echo " Informe um novo aluno";
                   break;
                } 

  }  while ($repetir);
 
    ?>
</body>
</html>
<?php
//if(isset($nome,$numero1,$numero2,$numero3,$numero4))   {

//} // fecha if


?>