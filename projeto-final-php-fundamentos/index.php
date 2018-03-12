<?php
if (isset($_POST['nome']) AND empty($_POST['nome'] == false) {
	$nome  = $_POST['nome'];	
	file_put_contents("arquivo.txt", "$nome", FILE_APPEND);
	file_put_contents("arquivo.txt", " ", FILE_APPEND);
	header("Location: index.php");
}




?>
<form method="POST">
	<input type="text" name="nome">
	<input type="submit" name="enviar">
</form>
