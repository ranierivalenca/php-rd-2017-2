<!DOCTYPE html>
<html>
<head>

	<title>array_fill</title>

</head>
<body>

	Função array_fill()

	Descrição:
	
	O array_fill() é uma função que preenche uma matriz com valores.

	Exemplo:
	
	array_fill( index,number,value );
	
	Como podemos ver, esta função requer alguns parâmetros
	
	- Index: O primeiro índice de matriz retornada
	- Number: Especifica o número de elementos para inserir
	- Value: Especifica o valor a utilizar para o enchimento da matriz

		<?php
		$a1=array_fill(3,4,"blue");
		print_r($a1);
		?>

</body>
</html>