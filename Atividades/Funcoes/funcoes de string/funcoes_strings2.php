<?php
//strlen vai contar quantos caracteres tem 

$cpf = isset($_POST['cpf']) ? $_POST['cpf'] :'';
$total_string_cpf = strlen($cpf);

if($total_string_cpf !=11 && $cpf !=''){
	echo "CPF INVALIDO";
}

?>

<form method="post" action="">
	<label> CPF:
	<input type="text" name="cpf">
	<label> 
	<input type="submit" value="HeadShot">
</form>



<?php
// str_replace   pesquisar os pontos que tem nas strings e subistitui por virgulas
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
$texto = "032.962.445-81";
$cpf =str_replace(".","", $texto);
$cpf =str_replace("-","", $cpf);
echo $cpf;

echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';


//função substr, retorna parte de uma string

$texto = "Entenda o por que Deus é bom e maravilhoso..";

echo substr($texto, 0, 29);



?>