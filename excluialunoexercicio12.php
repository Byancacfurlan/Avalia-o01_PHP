
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12 -Excluir de Alunos</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<h1>Resolução do Exercício 12 <p>- Excluir de Alunos </h1>
<br>  

<br>           
         <br>  
         <br> 
<h2>-------------------------------------</h2>
<br>  

  <?php 
    include_once('conectar.php');
    echo "<h2>-------------------------------------</h2>";

       // echo "-------------------------------------------------------------<p>";
       // echo "Seu Algorítmo para resolução do exercicio PHP deve estar aqui<p>";
       // echo "Receba os valores via POST e apresente o resultado<p>";
       // echo "-------------------------------------------------------------<p>";         
      $nome = $_POST['nome'];
        $sql = "DELETE FROM alunos WHERE nome = '$nome'";
       // $sql1 = "SELECT * FROM alunos WHERE nome ='$pesquisaNome'";
       // $sql2 = "SELECT * FROM alunos WHERE email ='$pesquisaEmail'";
        $resultado = mysqli_query($strcon,$sql);
        echo "<h2>Exclusão realizada com sucesso!</h2>";
        mysqli_close($strcon);
        
    ?>
   
                
        <h2>-------------------------------------</h2>
        <br>  
        <br>  
        <br>  

        <p><a href="index.html" class="button">HOME</a></p>
        <br>  
        <br>  
        <br>  

         <br>           
         <br>  
         <br>  
         <br>  
         <br>  
         <br>  
         <br>  
         <br>  

        </body>
        <span>Desenvolvido por Byanca Campos Furlan - Para a prova de Programação de computadores.</span>    
        </html>
       


