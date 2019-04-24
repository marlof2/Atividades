<?php
//is_array verifica se uma variavel é uma array

$array = array();
$retorno = is_array( $array);

if($retorno){
 echo "Verdadeiro";

}else {
	echo "falso";
}
echo '<br/>';

//in_array, recebe 2 parametros('', $array), no primeiro passamos o que queremos procurar no array


$array = array('mac', 'linux','windos ');
$retorno = is_array( $array);

if($retorno){
 echo "Verdadeiro";

}else {
	echo "falso";
}
echo '<br/>';
echo '<br/>';

//sort ordena um array, e os seus indices não se matem

$frutas = array(0=>'Banana',1=>'Amora', 3=>'Carambola');

sort ($frutas);
var_export($frutas);
echo '<br/>';

//asort ordema um array e mantem seus indices

$frutas = array(0=>'Banana',1=>'Amora', 3=>'Carambola');

asort ($frutas);
var_export($frutas);
echo '<br/>';

//array_merge, junta os dois arrays

$array1 = array('mac','linux');
$array2 = array('windos');
$array3 = array('solaris');
$novo_array = array_merge($array1,$array2);
var_export($novo_array);
?>
