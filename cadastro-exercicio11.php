<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11 - Cadastro de Alunos e Carga Horária para Atividades Complementares</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>Resolução do Exercício 11 <p>- Cadastro de Alunos e Carga Horária para Atividades Complementares </h1>
    <h2>-------------------------------------</h2>

    <?php 
       // echo "-------------------------------------------------------------<p>";
       // echo "Seu Algorítmo para resolução do exercicio PHP deve estar aqui<p>";
       // echo "Receba os valores via POST e apresente o resultado<p>";
       // echo "-------------------------------------------------------------<p>";         
       
     
       if (isset($_POST['nome'])&& isset($_POST['matricula']) && isset($_POST['curso']) && 
          isset($_POST['email']) && isset($_POST['telefone'])&& isset($_POST['endereco']) && 
          isset($_POST['cep']) && isset($_POST['cidade'])&& isset($_POST['uf']) && isset($_POST['hcomplementares']) && 
          isset($_POST['cargaHoraria'])){
            $nome = $_POST['nome'];
            $matricula = $_POST['matricula'];
            $curso = $_POST['curso'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $endereco = $_POST['endereco'];
            $cep = $_POST['cep'];
            $cidade = $_POST['cidade'];
            $uf = $_POST['uf'];
            $hcomplementares = $_POST['hcomplementares'];
            $cargaHoraria = $_POST['cargaHoraria'];  

            echo"<h2>Dados Recebidos:</h2>";
                echo"<p><strong>Nome:</strong>$nome</p>";
                echo"<p><strong>Matrícula:</strong>$matricula</p>";
                echo"<p><strong>Curso:</strong>$curso</p>";
                echo"<p><strong>E-mail:</strong>$email</p>";        
                echo"<p><strong>Telefone:</strong>$telefone</p>";
                echo"<p><strong>Endereço:</strong>$endereco</p>";
                echo"<p><strong>CEP:</strong>$cep</p>";
                echo"<p><strong>Cidade:</strong>$cidade</p>";
                echo"<p><strong>UF:</strong>$uf</p>";
                echo"<p><strong>Horas complementares:</strong>$hcomplementares</p>";
                echo"<p><strong>Carga Horária:</strong>$cargaHoraria</p>"; 
              //  echo "<h2>Cadastro realizado com sucesso!</h2>";
            } else {
              echo "<h2>Erro: Todos os campos são obrigatórios!</h2>";
                exit;
            }        
        //else {
       //     echo "<h2>Invalid request</h2>";
      //  }
        $conexao = mysqli_connect("localhost","root","","prova_01");
        if (!$conexao){
            die("Erro de conexão com o Banco de Dados!");
            }
            
        $sql = "INSERT INTO alunos(nome, matricula, curso, email, telefone, endereco,cep, cidade, uf, hcomplementares, cargaHoraria)VALUES ('$nome','$matricula','$curso','$email','$telefone','$endereco','$cep','$cidade','$uf', '$hcomplementares','$cargaHoraria')";
        echo "<h2>Cadastro realizado com sucesso!</h2>";            
        $resultado = mysqli_query($conexao,$sql);
        mysqli_close($conexao);

        
    ?>
   
        <h2>-------------------------------------</h2>
        <p><a href="index.html" class="button">HOME</a></p>
           
        </body>
        <span>Desenvolvido por Byanca Campos Furlan - Para a prova de Programação de computadores.</span>    
        </html>
       


