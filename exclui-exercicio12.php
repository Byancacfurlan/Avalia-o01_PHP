<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12 -Busca de Alunos</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>Resolução do Exercício 12 <p>- Busca de Alunos </h1>
    <h2>-------------------------------------</h2>
<table border ="1" >
 <tr>
  <th>NOME </th> 
  <th>MATRÍCULA </th> 
  <th>CURSO </th> 
  <th>E-MAIL </th> 
  <th>TELEFONE </th> 
  <th>ENDEREÇO </th> 
  <th>CEP </th> 
  <th>CIDADE </th> 
  <th>UF </th> 
  <th>HORAS COMPLEMENTARES </th> 
  <th>CARGA HORÁRIA </th> 
</tr>
    <?php 
    include_once('conectar.php');
 // include_once('pesquisa.php');
       // echo "-------------------------------------------------------------<p>";
       // echo "Seu Algorítmo para resolução do exercicio PHP deve estar aqui<p>";
       // echo "Receba os valores via POST e apresente o resultado<p>";
       // echo "-------------------------------------------------------------<p>";         
      
        $sql = "SELECT * FROM alunos ";
       // $sql1 = "SELECT * FROM alunos WHERE nome ='$pesquisaNome'";
       // $sql2 = "SELECT * FROM alunos WHERE email ='$pesquisaEmail'";
        $resultado = mysqli_query($strcon,$sql);
      while ($registro = mysqli_fetch_array($resultado)){
        $nome = $registro['nome'];
        $matricula = $registro['matricula'];
        $curso = $registro['curso'];
        $email = $registro['email'];
        $telefone = $registro['telefone'];
        $endereco = $registro['endereco'];
        $cep = $registro['cep'];
        $cidade = $registro['cidade'];
        $uf = $registro['uf'];
        $hcomplementares = $registro['hcomplementares'];
        $cargaHoraria = $registro['cargaHoraria'];  
        echo "<tr>";
        echo "<td>".$nome."</td>";
        echo "<td>".$matricula."</td>";
        echo "<td>".$curso."</td>";
        echo "<td>".$email."</td>";
        echo "<td>".$telefone."</td>";
        echo "<td>".$endereco."</td>";
        echo "<td>".$cep."</td>";
        echo "<td>".$cidade."</td>";
        echo "<td>".$uf."</td>";
        echo "<td>".$hcomplementares."</td>";
        echo "<td>".$cargaHoraria."</td>";
        echo "</tr>";
      }
        mysqli_close($strcon);
echo "</table>";
        
    ?>
   <form name="exclui" action = "excluialunoexercicio12.php" method="POST">
    <p> Digite o nome do aluno que deseja excluir:
      <input type="text" name = "nome"/></p>
      <input type="submit" name = "botao" value = "Excluir"/></p>
    </form>
                
        <h2>-------------------------------------</h2>
        <p><a href="index.html" class="button">HOME</a></p>
           
        </body>
        <span>Desenvolvido por Byanca Campos Furlan - Para a prova de Programação de computadores.</span>    
        </html>
       


