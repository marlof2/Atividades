<?php
include '/includes/header.php';
//conexão
require_once "db_conection.php";

if (isset($_GET['id_projeto'])) {
    $id = $_GET['id_projeto'];
    $sql = "SELECT * FROM projetos WHERE id_projeto = '$id' ";
    $resultado = pg_query($conexao, $sql);
    $dados = pg_fetch_array($resultado);
}
?>
 
<div class="row">
    <div class="col s12 m6 push-m3">
        <h4 class="light">Editar Projetos</h4>
        <form  method="post" id="forn" onsubmit="return valida(this);" name="formAdicionar">
        <input type="hidden"  name="id_projeto" value="<?php echo $dados['id_projeto'] ?>" >
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome'] ?>">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="area" id="area" value="<?php echo $dados['area'] ?>">
                <label for="area">Área</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="intro" id="intro" value="<?php echo $dados['introducao'] ?>">
                <label for="intro">Introdução</label>
            </div>
            <button type="button" name="btn-editar" id="btn-editar" class="btn green">Alterar</button>
            <a href="index.php" class="btn">Voltar</a>
        </form>
    </div>
</div>

<?php

include_once './includes/footer.php';
?> 