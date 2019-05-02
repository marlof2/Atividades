<?php
//header
include_once './includes/header.php';
//conexão
require_once "db_conection.php";
?>


<div class="row">
    <div class="col s12 m6 push-m3">
        <h4 class="light">Lista de Projetos</h4>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome </th>
                    <th>Área</th>
                    <th>Introdução</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT * FROM projetos";
                $resultado = pg_query($conexao, $sql);
                while ($dados = pg_fetch_array($resultado)) {
                    ?>
                    <tr>
                        <td><?php echo $dados['nome'] ?> </td>
                        <td><?php echo $dados['area'] ?> </td>
                        <td><?php echo $dados['introducao'] ?> </td>
                        <td><a href="editar.php?id_projeto=<?php echo $dados['id_projeto'] ?>" class="btn-floating orange">
                                <i class="material-icons">
                                    edit </i></a></td>
                        <td><a id="id_projeto=<?php echo $dados['id_projeto'] ?>" class="btn-floating red excluir">
                                <i class="material-icons">
                                    delete </i></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <br />
    </div>
</div>





<?php

include_once './includes/footer.php';
?>