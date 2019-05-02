<?php

include_once './includes/header.php';
?>


<div class="row">
    <div class="col s12 m6 push-m3">
        <h4 class="light">Lista de Projetos</h4>
        <form id="forn" method="post" name="forn" >
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="area" id="area">
                <label for="area">Área</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="intro" id="intro">
                <label for="intro">Introdução</label>
            </div>
            <button type="button" id="btn-cadastrar" name="btn-cadastrar"  class="btn green">Cadastrar</button>
            <a href="index.php" class="btn" >Voltar</a>
        </form>
    </div>
</div>

<?php

include_once './includes/footer.php';
?> 