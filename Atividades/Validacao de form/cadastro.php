<?php
	if (isset($_POST['name']) && empty($_POST['name'])){
		echo 'preencha o campo NOME <br/>'; 
} 

	if (isset($_POST['cpf']) && empty($_POST['cpf'])){
		echo 'preencha o campo CPF <br/>'; 
}

if (isset($_POST['cpf']) && !is_numeric($_POST['cpf'])){
		echo 'Apenas numero em CPF <br/>'; 
}


?>
<form method= "post" action="" >
	<label>
		Nome Completo:
		<input type="text" name="name">
	</label>
	
	<label>
		CPF:
		<input type="text" name="cpf">
	</label>

	<input type="submit" value ="Cadastrar">	
</form>