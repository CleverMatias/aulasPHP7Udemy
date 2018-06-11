<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>JSON</title>
</head>
<body><pre>
<?php 
	//Estudo sobre JSON

	//Criando arrays para estudo
	$pessoas = array();

	array_push($pessoas, array(
		'nome' 	=> 'Cleverson Matias',
		'idade' => 34
	));

	array_push($pessoas, array(
		'nome' 	=> 'Eduardo Detoni',
		'idade'	=> 12
	));

	// transformando os dados em json

	echo json_encode($pessoas) . '<br><br>';
	//[{"nome":"Cleverson Matias","idade":34},{"nome":"Eduardo Detoni","idade":12}]

	//  transformando json em array
	$json = '[{"nome":"Cleverson Matias","idade":34},{"nome":"Eduardo Detoni","idade":12}]';

	print_r (json_decode($json));
 ?>
</pre></body>
</html>