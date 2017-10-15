<?php
function args(){
		//$numargs recebe a função func_get_args().
    	$numargs = func_get_args(1,2,3);
    	return $numargs;
	}
	//imprime um array da posição desses números.
	print_r(args(4,5,6));
?>