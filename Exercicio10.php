<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 10 -  Identificação do mês correspondente a um número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<br>
    <h1>Resolução do Exercício 10 <p>-  Identificação do mês correspondente a um número </h1>

    <br>
    <br>
    <br>

    <h2>-------------------------------------</h2>
    <br>

    <?php 
       // echo "-------------------------------------------------------------<p>";
       // echo "Seu Algorítmo para resolução do exercicio PHP deve estar aqui<p>";
       // echo "Receba os valores via POST e apresente o resultado<p>";
       // echo "-------------------------------------------------------------<p>"; 
       if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $mes = $_POST['mes'];
            }
        echo "<br>";
            switch ($mes) {
                case "1":
                    echo "<h2> O mês de número $mes é JANEIRO</h2>";            
                    break; 
                case "2":
                    echo "<h2> O mês de número $mes é FEVEREIRO</h2>";            
                    break; 
                case "3":
                    echo "<h2> O mês de número $mes é MARÇO</h2>";            
                    break; 
                case "4":
                    echo "<h2> O mês de número $mes é ABRIL</h2>";            
                    break; 
                case "5":
                    echo "<h2> O mês de número $mes é MAIO</h2>";            
                    break; 
                case "6":
                    echo "<h2> O mês de número $mes é JUNHO</h2>";            
                    break; 
                case "7":
                    echo "<h2> O mês de número $mes é JULHO</h2>";            
                    break; 
                case "8":
                    echo "<h2> O mês de número $mes é AGOSTO</h2>";            
                    break; 
                case "9":
                    echo "<h2> O mês de número $mes é SETEMBRO</h2>";            
                    break; 
                case "10":
                    echo "<h2> O mês de número $mes é OUTUBRO</h2>";            
                    break; 
                case "11":
                    echo "<h2> O mês de número $mes é NOVEMBRO</h2>";            
                    break; 
                case "12":
                    echo "<h2> O mês de número $mes é DEZEMBRO</h2>";            
                    break; 
                default:
                    echo "<h2> Digito inválido! </h2>";
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
       