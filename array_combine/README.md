<h1>Array_Combine</h1>
<p>A função <strong>array_combine</strong> simplesmente cria um array,<br>
combinando dois outros arrays, onde um array é para as chaves e o outro para os seus valores.<br>
</p>

<h2>Sintaxe</h2>
<strong><p>Array_combine(Array_de_chaves , Array_de_valores).</p></strong>
<p>Chamamos a função array_combine passando como parâmetro os dois arrays que queremos combinar.<br>
O primeiro é o das chaves e o segundo será o array de valores.</p>

<h3>Exemplo simples</h3>
<p>

	$array1 = ["7", "2", "12", "9"];<br>
	$array2 = ["sete", "dois", "doze", "nove"];<br><br>

	$novoArray = array_combine($array1, $array2);<br>
	var_dump($novoArray);<br><br>

	//a saída será :<br><br>
	//array(4) {<br>
	//[7]=><br>
	//  string(4) "sete"<br>
	//  [2]=><br>
	//  string(4) "dois"<br>
	//  [12]=><br>
	//  string(4) "doze"<br>
	//  [9]=><br>
	//  string(4) "nove"<br>
	//}

</p>

