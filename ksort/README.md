<body>
	<h1>Função ksort() - PHP</h1>
	<p>Ordena um array pelas chaves, mantendo assim a correlação entre as chaves e os valores. Essa função é bastante útil principalmente para arrays associativos.</p>

<h2>Sintaxe :</h2>
<p>int ksort ( array &$array [, int $sort_flags ] )</p>

<h2>Exemplo :</h2>
<p><?php
	$frutas = array("d"=>"limao", "a"=>"laranja", "b" =>"banana", "c"=>"maçã");
	ksort($frutas);
	foreach ($fruits as $key => $val) {
    	echo "$chave = $valor\n";
	}
?>

<b>O exemplo acima irá imprimir:</b>

a = laranja
b = banana
c = maçã
d = limao</p>
<p>As chaves eram as vogais, "a,b,c,d", a função imprimiu em ordem alfabética as chaves (as vogais) e os valores que estavam associados a elas.</p>
</body>