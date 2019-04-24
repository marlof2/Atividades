<?php

function desconto ($valorTotal,$desconto){

	$valorDesconto = $valorTotal * ($desconto/100);
	$valorComDesconto = $valorTotal  - $valorDesconto;

	 return $valorComDesconto;
}


?>