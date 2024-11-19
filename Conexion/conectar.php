<?php
$servidor = "localhost";
$usuario = "root";
$contrasenia = "02351236";
$bd = "bibliotecaac";

#conectando al servidor mysql y a la BD
$cn = mysqli_connect($servidor,$usuario,$contrasenia,$bd);

#Verificando la conexion
if(!$cn){
    echo "Problemas al conectar con el servidor";
}
mysqli_set_charset($cn,"utf8");
?>
