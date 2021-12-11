	<?php 
		include 'header.php';
		include 'functions/functions.php';
		$aula_atual = 'variaveis-superglobais';
	?>


	<body>


		<h2>Variáveis Superglobais</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>



		<h3>$_SERVER</h3>

		<pre><?php var_dump($_SERVER); ?></pre>



		<h3>$GLOBALS</h3>

		<?php

		$msg = 'hello world';
		$bye = 'bye bye world';

		function mensagem() {
			echo $GLOBALS['msg'];
		}

		mensagem();

		?>

<pre><?php echo($GLOBALS['bye']); ?></pre>

		










		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>