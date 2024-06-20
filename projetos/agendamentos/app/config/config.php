<?php

@define("HOST", "sql111.infinityfree.com");
@define("USER", "	if0_36761125");
@define("PASSWD", "L45B2NHfEg"); // lembrar de mudar a psswd no ubuntu
@define("DBname", "if0_36761125_portfolio");

$conn = new mysqli(HOST, USER, PASSWD, DBname); //conecta ao banco de dados.

if ($conn->connect_error) {
    echo "erro ao conectar ao banco ". $conn->error;
}

?>