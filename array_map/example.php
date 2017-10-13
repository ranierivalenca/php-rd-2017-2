<?php 

// função que eleva o número ao quadrado
function ao_quadrado($x){
	return($x*$x);
}

$array = [2,4,3,5,9]; // a função será aplicada aos elementos desse array. 
$result = array_map("ao_quadrado",$array); //passando a função e o array como parâmetros.

// imprimindo os valores após a função ter sido executada.
foreach ($result as $valor) {
	echo $valor,PHP_EOL;
}

 ?>