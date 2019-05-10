<?php
//sessão
session_start();
//conexão
include "db_conection.php";

if (!empty($_POST)) {
    
    $id = ($_POST['id_projeto']);
    
    
    $sql = "DELETE FROM projetos WHERE id_projeto = $id";
}
var_dump($sql);

$result = pg_query($conexao, $sql);

if (!$result) {
    echo "Erro ao Excluir";
} else {
    echo 'Excluido com sucesso' ;
}
