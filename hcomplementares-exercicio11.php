    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 11 - Cadastro de Alunos e Carga Horária para Atividades Complementares</title>
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <h1>Resolução do Exercício 11 <p>- Cadastro de Alunos e Carga Horária para Atividades Complementares </h1>
        <br>
        <br>
        <br>
        <br>
        <h2>-------------------------------------</h2>
        <br>
        <br>
        <br>

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
    <th>CARGA HORÁRIA ATUALIZADA </th> 
    </tr>
        <?php 
        include_once('pesquisa.php');
        echo "<br>";
        // echo "-------------------------------------------------------------<p>";
        // echo "Seu Algorítmo para resolução do exercicio PHP deve estar aqui<p>";
        // echo "Receba os valores via POST e apresente o resultado<p>";
        // echo "-------------------------------------------------------------<p>";         
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $matricula = ['matricula'];
            $cargaHoraria1 = $_POST['cargaHoraria1']; 
                if(!empty($matricula)&& !empty($cargaHoraria1)){ 
                    $sql_horas = "SELECT * FROM alunos WHERE matricula ='$pesquisa'";
                    $resultado = mysqli_query($strcon,$sql_horas); 
                    $cont = 0;
            
            if (mysqli_num_rows($resultado) > 0){
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
                $cargaHorariaAtual = $registro['cargaHoraria'];
                $cargaTOTAL = $cargaHorariaAtual + $cargaHoraria1;
                
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
                echo "<td>".$cargaHorariaAtual."</td>";
                echo "<td>".$cargaTOTAL."</td>";
                echo "</tr>";        
                    
                
            $sql_update = "UPDATE alunos SET cargaHoraria = '$cargaTOTAL' WHERE matricula = '$pesquisa'";
                    if (mysqli_query($strcon, $sql_update)) {
                    echo "<p>Carga horária atualizada com sucesso!</p>";
                } else {
                    echo "<p>Erro ao atualizar carga horária: " . mysqli_error($strcon) . "</p>";
                }
        
        }
                }

   
        else {
                echo "<h2>Nenhum aluno encontrado com essa matrícula!</h2>";
            }
        

                }
        }
            else {
                echo "<h2>Por favor, preencha todos os campos!</h2>";
            }
        
            mysqli_close($strcon);

            echo "</table>";
        ?>
                 <br>
                 <br> 
                 <br>  
                 <br>
                 <br>

            <h2>-------------------------------------</h2>
            <br>
            <br>
            <br>
            <p><a href="index.html" class="button">HOME</a></p>
            
            </body>
            <br>
            <br>
            <br>
            <br><br>
            <br>
            <br>
            <br>
            <span>Desenvolvido por Byanca Campos Furlan - Para a prova de Programação de computadores.</span>    
            </html>
        


