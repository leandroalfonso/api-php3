<?php
header("Access-Control-Allow-Origin: *");


$dados = array(
    "nome" => "João da Silva",
    "idade" => 25,
    "cidade" => "São Paulo"
);



echo json_encode($dados);




?>