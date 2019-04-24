<?php

ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);
/**
 * ********************** [ BOLSA ESTUDOS SEC 2019 ] *****************************
 * A Secretaria da Educação do Estado da Bahia recebeu uma lista com 
 * alunos de diferentes estados e precisa identificar quais desses podem ou
 * não podem ganhar uma bolsa de estudos. Somente os alunos que residem no
 * estado da Bahia(BA) poderão participar da seleção, onde para aprovação eles 
 * terão que possuir média acima de 6,0. Alunos reprovados com média superior
 * a 5,5 poderão refazer a prova. As notas lançadas correspondem as unidades
 *  AVI, AVII e AVIII respectivamente.
 * 
 * Com base na necessidade informada anteriormente, a SEC irá montar um sistema
 * que irá ler essas informações dos alunos e exibir o resultado dependendo da 
 * opção selecionada.
 * 
 * Menu estudante
 * -> Estudantes Aprovados
 * -> Estudantes Reprovados
 * -> Maior média entre os aprovados
 * -> Maior média entre os reprovados
 * -> Alunos que podem refazer a prova.
 * 
 * Obs: Não é necessário fazer o menu, basta fazer somente as funções necessárias.
 * Obs2: Sim, a questão foi modificada!
 * BOA SORTE!
 */
$alunos[0]['notas'] = array(5, 8.1, 5);
$alunos[0]['estado'] = 'BA';
$alunos[0]['nome'] = 'Marlo';

$alunos[1]['notas'] = array(6, 6.5, 5.4);
$alunos[1]['estado'] = 'BA';
$alunos[1]['nome'] = 'Carlos';

$alunos[2]['notas'] = array(5.5, 6, 8.0);
$alunos[2]['estado'] = 'BA';
$alunos[2]['nome'] = 'Vinicius';

$alunos[3]['notas'] = array(5.4, 7.1, 5.3);
$alunos[3]['estado'] = 'BA';
$alunos[3]['nome'] = 'Emily';

$alunos[4]['notas'] = array(2.4, 7.1, 5.3);
$alunos[4]['estado'] = 'RJ';
$alunos[4]['nome'] = 'Judá';

$alunos[5]['notas'] = array(2, 2.1, 5.3);
$alunos[5]['estado'] = 'SP';
$alunos[5]['nome'] = 'Juan';

$alunos[6]['notas'] = array(5.4, 3, 5.3);
$alunos[6]['estado'] = 'BA';
$alunos[6]['nome'] = 'Ramatis';

$alunos[7]['notas'] = array(7.4, 7.1, 5.3);
$alunos[7]['estado'] = 'BA';
$alunos[7]['nome'] = 'Karina';

$alunos[8]['notas'] = array(5.4, 7.1, 5.3);
$alunos[8]['estado'] = 'BA';
$alunos[8]['nome'] = 'Fabio';

$alunos[9]['notas'] = array(5.4, 7.1, 5.3);
$alunos[9]['estado'] = 'BA';
$alunos[9]['nome'] = 'Leandro';

$alunos[10]['notas'] = array(5.5, 5.5, 5.5);
$alunos[10]['estado'] = 'BA';
$alunos[10]['nome'] = 'Lucas';


$alunos[11]['notas'] = array(9.4, 7.1, 5.3);
$alunos[11]['estado'] = 'BA';
$alunos[11]['nome'] = 'Sr. Barriga';

$alunos[12]['notas'] = array(5.4, 7.1, 5.3);
$alunos[12]['estado'] = 'BA';
$alunos[12]['nome'] = 'Carol';


#######################[ CONSTRUA AS FUNCOES AQUI ]#############################

function alunosDaBahia($alunos) {
    foreach ($alunos as $aluno) {
        if ($aluno['estado'] == 'BA') {
            $alunosBahia[] = $aluno;
        }
    }
    return $alunosBahia;
}

function calcularMedia($alunosBahia) {

    foreach ($alunosBahia as $index => $aluno) {
        $totalNotas = 0;
        $media = 0;
        $sizeArrNota = count($aluno['notas']);

        foreach ($aluno['notas'] as $nota) {
            $totalNotas += $nota;
        }
        $aluno['media'] = $totalNotas / $sizeArrNota;
        $alunosBahia[$index] = $aluno;
    }
    return $alunosBahia;
}

//--------------------------------------------------------------------------------------------------------//

function alunosAprovados($alunosBahia) {

    foreach ($alunosBahia as $aluno) {
        if ($aluno['media'] > 6) {
            $alunosAprovados[] = $aluno;
        }
    } 
    return $alunosAprovados;
}

//--------------------------------------------------------------------------------------------------------//

/**
 * Função que retorna uma lista de alunos reprovados
 * @param array $alunosBahia Lista de alunos da Bahia
 * @return array
 */
function alunosReprovados($alunosBahia) {
    foreach ($alunosBahia as $aluno) {
        if ($aluno['media'] <= 6) {
            $alunosReprovados[] = $aluno;
        }
    } 
    return $alunosReprovados;
}

//--------------------------------------------------------------------------------------------------------//

function maiorMedia($alunoAprovado) {
    $alunoMaiorMedia['media'] = 0;
    foreach ($alunoAprovado as $aluno) {

        if ($aluno['media'] > $alunoMaiorMedia['media']) {
            $alunoMaiorMedia = $aluno;
        }
    }
    return $alunoMaiorMedia;
}

//--------------------------------------------------------------------------------------------------------//

function menorMedia($alunoReprovado) {

    $alunoMenorMedia['media'] = 10;
    foreach ($alunoReprovado as $aluno) {

        if ($aluno['media'] < $alunoMenorMedia['media']) {
            $alunoMenorMedia = $aluno;
        }
    } 
    return $alunoMenorMedia;
}

function podemRefazer($alunosReprovados) {
    foreach ($alunosReprovados as $aluno)
        if ($aluno['media'] > 5.6) {
            $podemRefazer[] = $aluno;
        }
    return $podemRefazer;
}

########################[ ALGUNS COMANDOS PARA DEBUG ]##########################
echo '<pre>';
// var_dump($alunos);
########################[ CHAMADA DAS FUNCOES AQUI ]############################
$alunosBahia = alunosDaBahia($alunos);
$alunosBahia = calcularMedia($alunosBahia);
$alunoAprovado = alunosAprovados($alunosBahia);
$alunosReprovados = alunosReprovados($alunosBahia);
$maiorMedia = maiorMedia($alunoAprovado);
$menorMedia = menorMedia($alunoAprovado);

$podemRefazer = podemRefazer($alunosReprovados);
?>
