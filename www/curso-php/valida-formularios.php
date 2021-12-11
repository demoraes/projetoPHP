	<?php 
		include 'header.php';
		$aula_atual = 'valida-formularios';
	?>


	<body>


		<h2>Formulários</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

		<h3>Envie seus dados</h3>

		<?php 
			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				$nome = $_POST['nome'];
				$email = $_POST['email'];

				if($nome == '') {
					$erro_nome = '* O nome é obrigatório';
				} elseif($email == '') {
					$erro_email = '* O email é obrigatório ';
				}
			}
		?>

		<form action="valida-formularios.php" method="post">
			
			Nome: *
			<br>
			<input type="text" name="nome" class="field">
			<br>
				<div class="erro-form"><?php echo $erro_nome ?></div>
			<br>
			
			E-mail: *
			<br>
			<input type="text" name="email" class="field">
			<br>
				<div class="erro-form"><?php echo $erro_email ?></div>
			<br>

			<input type="submit" name="submit" class="submit"><br>
			<br>
				<div class="sucesso-form"></div>
			<br>
		</form>

		<h3>Confirmaçao</h3>
		<pre><?php print_r($_POST); ?></pre>

		



		

		

		
		








		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>