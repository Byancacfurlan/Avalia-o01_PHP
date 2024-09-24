<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9 -  Verificação de maioridade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<br>
<br>
<h1>Resolução do Exercício 9 <p>-  Verificação de maioridade </h1>
   
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
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            }
        
        if ($idade >= 18) {
            echo "<h2> $nome é maior de 18 e tem $idade anos </h2>";
        } else {
            echo "<h2>$nome não é maior de 18 e tem $idade anos </h2>";  

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
   



