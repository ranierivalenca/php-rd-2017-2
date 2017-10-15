<?php
function num(){
		//$numrgs recebe como parametro a função func_num_args(), que vai mostrar a quantidade de argumentos existentes.
    	$numargs = func_num_args();
     	//imprime a frase + o numero de argumentos.
     	echo "Numeros de argumentos: $numargs<br />\n";
	} 
	//argumentos da função. Nesse caso ele vai inprimir 4.
	num (1, 2, 3, 'oi');
?>