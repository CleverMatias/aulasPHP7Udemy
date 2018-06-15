<?php require_once 'testes.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Validar cpf</title>
	<link rel="stylesheet" type="text/css" href="assets/estilo.css">
</head>
<body>
<div id="wrapper">
	<div class="fm">
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
			<input type="text" name="cpf">
			<input type="submit" name="submit">
		</form>
	</div>
	<div>
<?php
if (isset($_POST['submit'])) {
    if ($confirm) {
        echo "<p>Válido!</p>";
    } else {
        echo "<p>Cpf inválido!";
    }
}

?>
	</div>
</div>
</body>
</html>
