<?php

$noticias = array ();

$noticias[1]['Titulo'] = 'Titulo da noticia 1';
$noticias[1]['conteudo'] = 'conteudo 1';

$noticias[2]['Titulo'] = 'titulo da noticia 2';
$noticias[2]['conteudo'] = 'conteudo 2';

$noticias[3]['Titulo'] = 'titulo da noticia 3';
$noticias[3]['conteudo'] = 'conteudo 3';

$noticias[4]['Titulo'] = 'titulo da noticia 4';
$noticias[4]['conteudo'] = 'conteudo 4';


$idx =1;
while ($idx <= 4) {
	echo $noticias[$idx]['Titulo'];
	echo '<br/>';
	echo $noticias[$idx]['conteudo'];
	echo '<br/>';
	$idx = $idx + 1;
 
}

?>