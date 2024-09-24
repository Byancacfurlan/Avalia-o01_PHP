<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8 -   Cálculo da média final de um aluno SGA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Resolução do Exercício 8 <p>-  Cálculo da média final de um aluno SGA </h1>

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
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $nota3 = $_POST['nota3'];
        }
        $media = (($nota1 *2)+($nota2*2)+($nota3*1))/5 ;
        if ($media >= 7) {
            echo "<h2>Aluno Aprovado com média = $media </h2>";
        } else {
            echo "<h2>Aluno Reprovado com média = $media </h2>";  

        } 
      

   ?>  
    <br>
   <br>
   <br>

<h2>-------------------------------------</h2>
<br>
<?php
        
        setlocale(LC_ALL, 'pt_BR.utf8');
        echo strftime('<h2> %d/%B/%G </h2>');
        ?>   <br>

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
     
<br>        
<br>


</body>
<span>Desenvolvido por Byanca Campos Furlan - Para a prova de Programação de computadores.</span>


</html>


