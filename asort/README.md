<body>
	<h1>Fução asort() - PHP</h1>
	<p>Ordena um array mantendo a associação entre índices e valores. Essa função ordena um array de forma que a correlação entre índices e valores é mantida. É usada principalmente para ordenar arrays associativos onde a ordem dos elementos é um fator importante.</p>
	
<h2>Sintaxe:</h2>

<p>bool asort ( array &$array [, int $sort_flags ] )</p>

<h2>Exemplo :</h2>
<p><?php
		$frutas = array("d" => "limao", "a" => "laranja", "b" => "banana", "c" => "melancia");
		asort($frutas);
		foreach( $frutas as $chave => $valor ){
		    echo "$chave = $valor\n";
		}
 		?></p>
<p><b>O exemplo acima irá imprimir:</b>

b = banana
a = laranja
d = limao
c = melancia</p>
<p>As frutas foram ordenadas na ordem alfabética, e os índices associados a cada valor foram mantidos.</p>
</body>
</html>