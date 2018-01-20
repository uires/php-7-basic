<?php



$nome = "uires";
$idade = 90;
$sobrenome ="luiz";

if ($nome == "uires" && $idade == 90) {
	echo "O nome está correto e eu tenho {$idade} anos";	

	if ($sobrenome == "deivide") {
		echo "<br>O meu sobrenome está correto";
	}else{
		echo "<br>O sobrenome está incorreto";

	}
}else{
	echo "O nome está incorreto";
}