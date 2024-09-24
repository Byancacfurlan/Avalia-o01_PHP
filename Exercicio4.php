<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4 -  Calculadora com switch </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Resolução do Exercício 4 <p>-  Calculadora com switch </p></h1>
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
            $n1 = $_POST['n1'];
            $operacao = $_POST['operacao'];
            $n2 = $_POST['n2'];
        }
        
       switch ($operacao){
        case "adicao":
            $resultado = $n1 + $n2;
            echo "<h2>A soma de $n1 + $n2 = $resultado</h2>";            
            break;
        case "subtracao":
            $resultado = $n1 - $n2;
            echo "<h2>A subtração de $n1 - $n2 = $resultado</h2>";              
            break;
        case "multiplicacao":
            $resultado = $n1 * $n2;
            echo "<h2>A multiplicação de $n1 x $n2 = $resultado</h2>";              
               
            break;
        case "divisao":
            if ($n2 !=0){
            $resultado = $n1 / $n2;
            echo "<h2>A divisão de $n1 / $n2 = $resultado</h2>";              
                   
            break;
            }
        default:
            echo "Digito inválido!";
        }

        ?>
            <br>

        <h2>-------------------------------------</h2>
       <?php
             setlocale(LC_ALL, 'pt_BR.utf8');
             echo strftime('<h2> %d/%B/%G </h2>');
             ?>
             <br>
             <br>
                     <h2>-------------------------------------</h2>
                     
                     <p><a href="index.html" class="button">HOME</a></p>
                     <br>     
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
     