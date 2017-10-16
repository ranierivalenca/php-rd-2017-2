
<body>
	<h1>Função sort() - PHP</h1>
	<p>Essa função ordena um array. Os elementos serão ordenados do menor para o maior ao final da execução dessa função.<b>Se dois itens são comparados como iguais, sua ordenação no array final é indefinidia.</b></p>
<h2>Sintaxe :</h2>
	<p>bool sort ( array &$array [, int $sort_flags = SORT_REGULAR ] )</p>	

<h2>exemplo :</h2>
<p>	<?php

	$fruits = array("lemon", "orange", "banana", "apple");
	sort($fruits);
	foreach ($fruits as $key => $val) {
    	echo "fruits[" . $key . "] = " . $val . "\n";
}

?></p>
<p><b>O exemplo acima irá imprimir:</b></p>

<p>fruits[0] = apple
fruits[1] = banana
fruits[2] = lemon
fruits[3] = orange
</p>

<p>Logo, as frutas foram imprimidas em ordem alfabética.</p>

</body>