<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 - Verificação de Número Positivo, Negativo ou Zero</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div> <br>
        <br>
       
        <br>
    <h1>Resolução do Exercício 1 <p>- Verificação de Número Positivo, Negativo ou Zero</p></h1>
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
       //if (isset($_POST['enviar'])){
       if ($_SERVER["REQUEST_METHOD"]== "POST"){
            $n1 = $_POST['n1'];
        }
       if ($n1 > 0 ){
            echo "<h2>O número $n1 é: Positivo</h2>";            
        }elseif ($n1 == 0){
            echo "<h2>O número $n1 é: Zero</h2>";          
        } elseif($n1 < 0){
            echo "<h2>O número $n1 é: Negativo</h2>";         
        } else{
            echo "Digito inválido!";
        }


   ?>

<br> <br>
        <br>
        <h2>-------------------------------------</h2>
        <br>      


    <?php
        
        setlocale(LC_ALL, 'pt_BR.utf8');
        echo strftime('<h2> %d/%B/%G </h2>');
        ?>
         <h2>-------------------------------------</h2>
        <br>      

                <p><a href="index.html" class="button">HOME</a></p>

        <?php
    
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
     
        echo "<p>Informações do browser (User agente):<p>" . $_SERVER['HTTP_USER_AGENT'];
    ?>
     
</div>   
<br>        

<br>

</body>
<span>Desenvolvido por Byanca Campos Furlan - Para a prova de Programação de computadores.</span>


</html>
