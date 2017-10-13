<?php
function crescente($a,$b){//os parametros desta função são o indice do array da vez e o anterior. Exemplo. Na primeira vez a rodar, os dois primeiros índices do array para qual foi chamado a função vão ser colocados como $a e $b. Na segunda vez em diante, o $a e $b serão o último indice usado anteriormente e o posterior a ele. Exemplo prático: Na primeira vez a rodar, o $a e $b seráo, respectivamente, o índice 0 e 1 do array. Na segunda vez, o $a e $b serão o índice 1 e 2. Na terceira, 2 e 3. Sempre repetindo o último e o comparando ao posterior.
	if ($a==$b){
		return 0;
	}
	  return ($a<$b)?-1:1; //o ?-1:1; retorna primeiro o menor valor, e depois o maior.
}
$a=array(4,2,8,6,3,20,1);
usort($a,"crescente"); // como parâmetros da função usort, o array e a função.

for($i=0;$i<sizeof($a);$i++){
  echo $a[$i], PHP_EOL;
  }

?>