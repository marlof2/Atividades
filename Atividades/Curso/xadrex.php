<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>MeuOvo</title>
	</head>

	<body>
		<?php 
			$tabuleiro[8]['a'] = 'torre preta';
			$tabuleiro[8]['b'] = 'bispo preta';
			$tabuleiro[8]['c'] = 'cavalo preta';
			$tabuleiro[8]['d'] = 'rainha preta';
			$tabuleiro[8]['e'] = 'rei preta';
			$tabuleiro[8]['f'] = 'bispo preta';
			$tabuleiro[8]['g'] = 'cavalo preta';
			$tabuleiro[8]['h'] = 'torre preta';

			$tabuleiro[7]['a'] = 'peao preto';
			$tabuleiro[7]['b'] = 'peao preto';
			$tabuleiro[7]['c'] = 'peao preto';
			$tabuleiro[7]['d'] = 'peao preto';
			$tabuleiro[7]['e'] = 'peao preto';
			$tabuleiro[7]['f'] = 'peao preto';
			$tabuleiro[7]['g'] = 'peao preto';
			$tabuleiro[7]['h'] = 'peao preto';

			
			echo '<br />';
			echo $tabuleiro[8]['b'];
			echo '<br />';
			echo $tabuleiro[8]['d'];
			echo '<br />';
			echo $tabuleiro[8]['a'];
		?>


	</body>
</html>