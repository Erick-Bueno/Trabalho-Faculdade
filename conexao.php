<?php
//conectando ao banco
    $usuario = "id19930703_erick";
    $senha = "6RR/+YW-T*iORnu0";
    $databse = "id19930703_siteenoc";
    $host = "localhost";

    $mysqli = new mysqli($host,$usuario,$senha,$databse);
    //se der erro mata a conexao
    if($mysqli ->error){
        die("falha ao conectar no banco de dados:". $mysqli ->error);
    }
?>