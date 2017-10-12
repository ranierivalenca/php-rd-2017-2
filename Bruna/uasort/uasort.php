<?php
function crescente($a,$b){
	if ($a==$b){
		return 0;
	}
	return ($a<$b)?-1:1; //o ?-1:1; retorna primeiro o menor valor, e depois o maior.
}
$a=array("troinha"=>4,"rodolfopaidoano"=>2,"php"=>9);
uasort($a,"crescente"); // pra entender melhor a diferença entre usort() e uasort(), modifique o nome da função aqui, rode e veja os resultados.

foreach($a as $i =>$valor){
   echo "Chave=" . $i . ", Valor=" . $valor,PHP_EOL; //perceba ao rodar com o uasort, que os valores serão organizados de acordo com a função, mas as chaves permanecerão as mesmas, só mudarão de lugar junto com os valores.
}

?>
