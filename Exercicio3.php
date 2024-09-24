<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 -  Cálculo do fatorial de um número – RECURSIVO </title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>Resolução do Exercício 3 <p>-   Cálculo do fatorial de um número – RECURSIVO </p></h1>
    
    <br>
        <br>        
        <br>
        <br>
        <br>
        <h2>-------------------------------------</h2>
        <br>
        <br>
    <?php 
       // echo "-------------------------------------------------------------<p>";
       // echo "Seu Algorítmo para resolução do exercicio PHP deve estar aqui<p>";
       // echo "Receba os valores via POST e apresente o resultado<p>";
       // echo "-------------------------------------------------------------<p>"; 
       if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $n3 = $_POST['n3'];
        }
        $resultado =1;
        echo "<h2>$n3! = ";
        for ($i=$n3 ; $i >=2; $i--){
            $resultado = $i*$resultado;
            
            echo "$i x ";
       }
       echo "1 = $resultado";
       echo "<br>";
    
       echo "<br>";
       ?>
       <h2>-------------------------------------</h2>
      <?php
            setlocale(LC_ALL, 'pt_BR.utf8');
            echo strftime('<h2> %d/%B/%G </h2>');
            ?>
            <br>
                    <h2>-------------------------------------</h2>
                    <p><a href="index.html" class="button">HOME</a></p>
                    
            <?php
           echo "<br>";
           echo "<br>";
           echo "<br>";
           echo "<br>";
           echo "<br>";
            echo "<p>Informações do browser (User agente):<p>" . $_SERVER['HTTP_USER_AGENT'];
        ?>
         
    </body>
    <span>Desenvolvido por Byanca Campos Furlan - Para a prova de Programação de computadores.</span>
    
    
    </html>
    