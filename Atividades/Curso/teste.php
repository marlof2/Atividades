
<form method= "post" action="" >
	<label>
		Numero1:
		<input type="text" name="n1" > +
	</label>
	
	<label>
		Numero2:
		<input type="text" name="n2" > 
	</label>

	
	<input type="submit" value ="Calcular">	<br/> <br/>
</form>



<?php

if (isset($_POST['n1']) && isset($_POST['n2'] )){
	if ($_POST['n1'] !='' or $_POST['n2'] !='')
		if(!is_numeric($_POST['n1']) && !is_numeric($_POST['n2'])){
			echo "Apenas numero";
		}
	{
		

		

	$numero1 = $_POST['n1'];
	$numero2 = $_POST['n2'];

	$numero = $numero1 + $numero2;


	if($numero > 20 && $numero !=0 ){
		echo 'A soma do numero1 e numero2 é= '; 
		echo $numero; echo '<br/>';		
		echo "Somou-se + 5 e ficou= ";
		echo $numero = $numero + 5 ;
	}else if ($numero <= 20 && $numero !=0){
		echo 'A soma do numero1 e numero2 é= '; 
		echo $numero; echo '<br/>';		
		echo "Subtraiu - 5 e ficou= ";
		echo $numero = $numero - 5 ;
		
	}

}

}

?>

<?php
$a = array('GATO,','CAO,','CAVALO,','LEÃO');

foreach ($a as $ani) {
	echo $ani;
 	
 } 
?>
