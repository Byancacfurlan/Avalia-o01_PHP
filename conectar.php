<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "prova_01";

$strcon = mysqli_connect($servername,$username, $password , $database);
if (!$strcon){
    die("Falha na Conexão: ".mysqli_connect_error());
}
echo "<p>Sucesso na conexão!</p>";
?>