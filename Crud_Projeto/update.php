<?php
//sessão
session_start();
//conexão
require_once "db_conection.php";

if (!empty($_POST)) {
    try{
        $nome = ($_POST['nome']);
        $area = ($_POST['area']);
        $intro = ($_POST['intro']);
        $id = ($_POST['id_projeto']);
     } catch(Exception $ex){
         echo 'Erro no post';
        }
        
        
    $sql = "UPDATE  projetos SET
                    nome ='$nome',
                    area = '$area',
                    introducao = '$intro'
            WHERE id_projeto = '$id'";

}

$result = pg_query($conexao, $sql);

if (!$result) {
    echo  "Erro ao Atualizar";
    
} else {
    echo  "Atualizado com sucesso";
    
}
 