<?php

$config_db = "mysql:host=localhost;dbname=teste";

try{
    $conexao_db = new PDO ($config_db,"root","");
    $pegarDeletado = 0;
    $stmt = $conexao_db->prepare("SELECT * FROM formulário_tb WHERE flag_deleted = :deletado");
    $stmt->bindParam(":deletado",$pegarDeletado);
    $stmt->execute();

    $result = $stmt->fetchAll();


} catch(PDOException $e){
    echo "Deu ruim no banco";
}