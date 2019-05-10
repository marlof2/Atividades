<?php
//conexão
include "db_conection.php";

if (!empty($_POST)) {
        $nome = ($_POST['nome']);
        $area = ($_POST['area']);
        $intro = ($_POST['intro']);


    $sql = "INSERT INTO projetos(
                    nome,
                    area,
                    introducao)
            VALUES(
                    '$nome',
                    '$area',
                    '$intro'
                    )";
}


$result = pg_query($conexao, $sql);

if (!$result) {
    echo  "Erro ao Adicionar";
    
} else {
    echo  "Adicionado com sucesso";
    
}






