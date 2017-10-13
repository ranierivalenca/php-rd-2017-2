<?php 

	$materia = ["portugues","matematica","Geografia","historia","Fisica"]; //array com as chaves.
	$notas = [6.0, 7.5, 9.0, 8.0, 4.5]; //array dos valores

	$array = array_combine($materia, $notas); // combinando os dois arrays.

	$soma = 0;
	echo "Notas ",PHP_EOL;
	
	//percorrendo o array e imprimindo a chave e o valor. 

	foreach ($array as $chave => $valor) { 
		echo "$chave : $valor",PHP_EOL;
		$soma += $valor;
	}
	//calculando a media dos valores do array.
	$media = $soma / 5;
	echo "A MEDIA  : ",$media;
 ?>