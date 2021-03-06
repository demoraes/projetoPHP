	<?php 
		include 'header.php';
		include 'functions/functions.php';
		$aula_atual = 'data-hora';
	?>


	<body>


		<h2>Data e Hora</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

		
		<h3>Epoch</h3>

		<p>Unix Epoch -> 01 Jan 1970 00:00:00 GMT</p><br>

		

		<h3>Função time - segundos desde o Epoch (formato unix timestamp)</h3>

		<p>

			<?php
				$agora = time();
				echo date("d/m/Y",$agora);
			?>
			
		</p>
		<br>

		<h3>Função mktime</h3>

			<?php
				
				$nascimento = mktime(0,0,0,5,30,2021);
				echo date("d m y",$nascimento);
				
			?>

		<p>

		</p>
		<br>

		<h3>Função strtotime</h3>

			<?php
				$outro_nome = strtotime("now + 1 weeks");
				echo date("d m y",$outro_nome);
			?>

		<p>

		</p>
		<br>


		<h3>Função date</h3>

			<?php
				
			?>

		<p>

		</p>
		<br>

		<h3>Fuso horário</h3>

			<?php
				echo date_default_timezone_get();
			?>			

		<p>

		</p>
		<br>


		<h3>Cálculos com data e hora</h3>

			<?php
				$data_entrega = strtotime('25 dec 2017');
				$data_esperada = strtotime('24 dec 2017');
				
				if($data_entrega > $data_esperada) {
					$atraso = ($data_entrega-$data_esperada) / 60 / 60 / 24;
					echo 'Produto entregue com atraso de ' . $atraso . ' dias.';
				} else {
					echo 'Produto entregue no prazo';
				}
			?>

		<p>

		</p>
		<br>


		




		<h3>Tabela de caracteres da função date</h3>

		


		<?php include 'tabela-date.php'; ?>


		










		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>