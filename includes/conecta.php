<?php
error_reporting(0);
$link = mysqli_connect("127.0.0.1", "root", "", "lady");
if (!$link) {
    echo "Falha ao conectar o servidor de banco de dados." . PHP_EOL;
    exit;
}
//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

//$chave = 'senac2020!';

//<?php include_once("conecta.php"); 
?>
