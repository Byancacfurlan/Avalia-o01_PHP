<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7 -   Comparação de valores A e B </title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>Resolução do Exercício 7 <p>-  Comparação de valores A e B </h1>
    <br>
        <br>
        <br>

    <h2>-------------------------------------</h2>
    <br>
    <br>
    <br>
    <?php 
       // echo "-------------------------------------------------------------<p>";
       // echo "Seu Algorítmo para resolução do exercicio PHP deve estar aqui<p>";
       // echo "Receba os valores via POST e apresente o resultado<p>";
       // echo "-------------------------------------------------------------<p>"; 
       if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
        }
        if ($n1 >$n2){
            echo "<h2>$n1 é maior que $n2</h2>";  

        }  elseif ($n1 < $n2){
            echo "<h2>$n1 é menor que $n2</h2>";  
        } elseif ($n1 ==  $n2){
            echo "<h2>$n1 é igual a $n2</h2>";  

        } else{
            echo "<h2> Digito inválido! <h2>";
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
            ?>
          
            <br>
                    <h2>-------------------------------------</h2>
                    
                    <p><a href="index.html" class="button">HOME</a></p>
                    <br>     
            <?php
    
           echo "<br>";
           echo "<br>";
           echo "<br>";
            echo "<p>Informações do browser (User agente):<p>" . $_SERVER['HTTP_USER_AGENT'];
        ?>
         
    </body>
    <span>Desenvolvido por Byanca Campos Furlan - Para a prova de Programação de computadores.</span>
    
    
    </html>
   
