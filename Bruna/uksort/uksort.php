<?php
function crescente($a,$b){
	if ($a==$b){
		return 0;
	}
  	return ($a<$b)?-1:1;//o ?-1:1; retorna primeiro o menor valor, e depois o maior.
}

$a=array("troinha"=>4,"rodolfopaidoano"=>2,"php"=>9);
uksort($a,"crescente");
 
foreach($a as $i => $valor){
   echo "Chave=" . $i . ", Valor=" . $valor, PHP_EOL; //Aqui, ao rodar perceba que ao invés de serem organizados os valores, como no uasort(), serão organizadas as chaves em ordem crescente(neste caso, em ordem alfabética).
   }

?>