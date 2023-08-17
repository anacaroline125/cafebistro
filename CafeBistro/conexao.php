<?php
$servename = "localhost";
$username = "root";
$password = "";
$databasename = "cafebistro_phpoo_turmaA";


//criação da conexão
$conn = new mysqli($servename, $username, $password, $databasename);

// verificando a conexão
if (!$conn){
    die("conexão falhou".mysqli_connect_error());
}
else{
    echo "conectou";
}
?>