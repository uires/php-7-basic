<?php

$produtos = array(
	0 => array(
		"nome" => "Lapis Bic",
		"quantidade" => "300un",
		"valor" => "R$3,11",
		"descricao" => "Lapis de alta qualidade da marca bic"	
	),
	1 => array(
		"nome" => "Tesoura",
		"quantidade" => "30un",
		"valor" => "R$13,51",
		"descricao" => "Tesoura de alta qualidade"
	),
	2 => array(
		"nome" => "lapiseira",
		"quantidade" => "233un",
		"valor" => "R$0,50",
		"descricao" => "Lapiseira para apontar lapis",
		"fornecedores" => array( 
				0 => "Lapis e Cia",
				1 => "Platifica cao",
				2 => "Votorantim",
				3 => "Loterias Caixa",
				4 => "Unijorge"
				)
		)

);



var_dump($produtos[0]);
echo "<br>";
var_dump($produtos[1]);
echo "<br>";
var_dump($produtos[2]);










