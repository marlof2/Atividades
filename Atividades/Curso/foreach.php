<?php
$protudos[1]= 'Sofá';
$protudos[2]= 'Mesa';
$protudos[3]= 'Cadeira';
$protudos[4]= 'Fogao';
$protudos[5]= 'Geladeira';

foreach ($protudos as $p) {
	  echo  $p.'<br/>';

	  if($p == 'Mesa'){

	  	echo 'Na compra da mesa concorra a outra com 50% de desconto  <br/>';



	  }
}



?>