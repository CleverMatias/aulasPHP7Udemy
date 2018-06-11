<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
<body><pre>
	<?php 
		// Criando arrays
		$frutas = array('Laranja', 'pera', 'limão');
		$carros = ['monza', 'cobalt', 'gol'];

		// Mostrando arrays
		print_r($carros);

		// Arrays multidimencionais 
		$pessoas = array();

		// Inserir dados em array multidimecionais
		array_push($pessoas, array(
				'nome'      => 'Cleverson',
				'sobrenome' => 'Matias',
				'sexo'		=> 'M',
				'Profissão' => 'Programador PHP'
			));

		array_push($pessoas, array(
				'nome'		=> 'Josiana',
				'sobrenome' => 'Fernandes',
				'sexo'		=> 'F',
				'Profissão'	=> 'Vendedora'
			));
		print_r($pessoas)
	 ?>
</pre></body>
</html>