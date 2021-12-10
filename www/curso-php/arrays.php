<?php 
		include 'header.php';
		$aula_atual = 'arrays';
	?>


	<body>

		<h2>ARRAYS</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

		
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
					),
					"Javascript"=> array(
						"n_alunos" => 280,
						"titulo" => "Javascript do zero",
						"url" => "http://www.udemy.com",
						"eval" => 90
					)
				); ?>

			<h3>Meus Cursos</h3>

			<ul>

				<?php foreach ($curos as $item) { ?>

					<li>
						<a href="<?php echo $item['url']; ?>"><?php echo $item['titulo'] ?></a><br>
						<?php
						 echo $item['n_alunos'] . 'alunos'.' / ' . 
						 $item['aval'].'avaliações'; 
						?>
					</li><br>

				<?php } ?>

			</ul>

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


		<h3>Array Push</h3>

		<?php 
			$aluno_novo = array();
			$aluno_novo['matricula'] = '98866';
			$aluno_novo['nome'] = 'Carla Pereira';
			$aluno_novo['ano_nasc'] = 1986;
			$aluno_novo['cidade'] = 'Fortaleza';
			array_push($alunos, $aluno_novo);

			$alunos_90 = array();

			foreach ($alunos as $aluno) {
				if($aluno['ano_nasc'] >= 1990) {
					$alunos_90[$aluno['matricula']] = array();
					$alunos_90[$aluno['matricula']]['nome'] = $aluno['nome'];
					$alunos_90[$aluno['matricula']]['ano_nasc'] = $aluno['ano_nasc'];
				}
			}
		?>

		<h4>Alunos Nascidos depois de 1990: </h4>
		<br>
		<pre><?php print_r($alunos_90) ?></pre>

		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>