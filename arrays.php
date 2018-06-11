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
		
		$multi = array(array(
				'nome' => 'cleverson',
				'idade' => 34
			));

		// Inserir dados em array multidimecionais
		$pessoas = array();
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