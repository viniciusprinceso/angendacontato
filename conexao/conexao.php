<?php
ini_set('display_errors', true);
error_reporting(E_ALL);

//Conexão on-line
$hostname = "fdb23.awardspace.net";
$database = "3153485_princeso";
$username = "3153485_princeso";
$password = "princeso123";

if($conecta = mysqli_connect($hostname, $username, $password, $database)){
    // echo "Conectado...............<br>";
}else{
    echo "Erro: ".mysqli_connect_error();
}
?>