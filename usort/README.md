<h1>Função usort() - PHP</h1>
<p>As funções <b>usort()</b> e <b>sort()</b> tem algo em comum. Ambas classificam/ordenam os arrays. A presença do "u" na frente do <b>u</b>sort() é o que diferencia uma da outra.</p>
<p>O usort() ordena os arrays com uma função de comparação definida pelo usuário. Ou seja, ao invés de ser o próprio PHP que ordenará usando alguma função interna como acontece no sort(), será você que criará essa função.</p>
<h2>Sintaxe:</h2>
<p>usort($array,"nome da funcao definida pelo usuario");</p>
<h2>Uso do usort():</h2>
<p>Com o exemplo do usort, podemos fazer algumas observações:
<ul>
	<li>1. A presença de uma função, que eu denominei crescente (pois ela ordena um array</li>
	<li>2. A presença de um array.</li>
	<li>3. A presença do próprio usort(), com os parâmetros ARRAY e FUNÇÃO, respectivamente.<b>usort($array,"nomedafuncao");</b></li>
	<li>4. E um for, ou foreach pra percorrer o array. Você quem decide!</li>
</ul>
</p>