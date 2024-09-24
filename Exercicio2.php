<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2 -  Exibição da tabuada de um número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Resolução do Exercício 2 <p>- Exibição da tabuada de um número </p></h1>
  
        <h2>-------------------------------------</h2>
    <?php 
       // echo "-------------------------------------------------------------<p>";
       // echo "Seu Algorítmo para resolução do exercicio PHP deve estar aqui<p>";
       // echo "Receba os valores via POST e apresente o resultado<p>";
       // echo "-------------------------------------------------------------<p>"; 
       if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $n2 = $_POST['n2'];
        }
       for ($i=0 ; $i <=10; $i++){
            $resultado = $i*$n2;
            echo "<a> $n2 x $i = $resultado</a>";
       }

   ?>
   <h2>-------------------------------------</h2>
  <?php
        setlocale(LC_ALL, 'pt_BR.utf8');
        echo strftime('<h2> %d/%B/%G </h2>');
        ?>
                <h2>-------------------------------------</h2>
                <p><a href="index.html" class="button">HOME</a></p>
                
        <?php
   
        echo "<p>Informações do browser (User agente):<p>" . $_SERVER['HTTP_USER_AGENT'];
    ?>
     
</body>
<span>Desenvolvido por Byanca Campos Furlan - Para a prova de Programação de computadores.</span>


</html>
