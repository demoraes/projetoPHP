<?php 
		include 'header.php';
		$aula_atual = 'arrays';
	?>


	<body>

		<h2>ARRAYS</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

		
		<h3>Meus Cursos</h3>
			<?php $curos = array(
					"Excel"=> array(
						"n_alunos" => 400,
						"titulo" => "Do zero ao avançado",
						"url" => "http://www.udemy.com",
						"eval" => 200
					),
					"HTML-CSS"=> array(
						"n_alunos" => 300,
						"titulo" => "Aprenda Desenvolvimento web",
						"url" => "http://www.udemy.com",
						"eval" => 150
					),
					"Python"=> array(
						"n_alunos" => 280,
						"titulo" => "Programe em Python",
						"url" => "http://www.udemy.com",
						"eval" => 90
					)
				); ?>

			<h4>Conteúdo do Array: </h4>
			<p><?php echo $curos['Curso1'] ?></p>
			<br>


		<h3>Informação do Curso</h3>

			<h4>Título: </h4>
			<p><?php echo $curos['Excel']['titulo'] ?></p>
			<br>

			<h4>Número de Alunos: </h4>
			<p><?php echo $curos['Excel']['n_alunos']  ?></p>
			<br>

			<h4>Número de Avaliações: </h4>
			<p><?php echo $curos['Excel']['eval']  ?></p>
			<br>

			<h4>URL: </h4>
			<p><?php echo $curos['Excel']['url']   ?></p>
			<br>

			<h4>URL da foto: </h4>
			<p><?php  ?></p>
			<br>
		

		<h3>Agora é a sua vez</h3>

			<p>Crie um Array e solte as suas informações em sequência. Pesquise também funções que podem ser aplicadas neste tipo de dados.</p>
			<br>






		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>