<?php

require_once("funcoes_desconto.php");

$valorTotal = 800;
$desconto = 10;
$valorTotalComDesconto= desconto($valorTotal,$desconto);



?>
Valor total: R$ <?php echo $valorTotal ?> <br/>
Valor de desconto: R$ <?php echo $desconto?>% <br/>
Valor Total com desconto: R$: <?php echo $valorTotalComDesconto?>
