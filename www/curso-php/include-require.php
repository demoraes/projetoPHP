<?php 
		include 'header.php';
		$aula_atual = 'include-require';
	?>


	<body>


		<h2>Include e Require</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>


		

		<h3>Include</h3>
		
		<?php 
			include 'file-to-include.php';
			$temperatura = celsiusToFahrenheit(40);
		?>


		<p><?php echo $temperatura ?></p>
		<br>




		<h3>Componente galeria de fotos1</h3>

		<?php

			$photoGallery = array (
				
				'img/prato_1.jpg',
				'img/prato_2.jpg',
				'img/prato_3.jpg',
				'img/prato_4.jpg'

			);

		?>
	
		
		<?php include 'components/gallery-001.php' ?>

		<?php

			$photoGallery = array (
				
				'img/prato_1.jpg',
				'img/prato_2.jpg',
				'img/prato_3.jpg',
				'img/prato_8.jpg'

			);

		?>
	

		<h3>Componente galeria de fotos2</h3>
	
		
		<?php include 'components/gallery-001.php' ?>

		



		

		

		
		










		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>