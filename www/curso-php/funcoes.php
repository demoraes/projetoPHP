	<?php 
		include 'header.php';
		include 'functions/functions.php';
		$aula_atual = 'funcoes';
	?>


	<body>


		<h2>FUNÇÕES</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>


		<h3>Função simples sem argumento</h3>


		<h3>Função com argumentos</h3>

		<?php 
			function soma($num1, $num2) {
				$soma = $num1 + $num2;
				return $soma;
			}

			$teste = soma(100,55);
			echo $teste
			
		?>


		<h3>Função com argumento e valor default</h3>

		<?php 
			function media($num1, $num2) {
				$media = ($num1 + $num2) / 2;
				return $media;
			}

			$media_numeros = media(10,12);

			echo $media_numeros
			
		?>

		<h3>echo ou return?</h3>





		










		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>