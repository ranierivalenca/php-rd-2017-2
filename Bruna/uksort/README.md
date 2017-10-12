<h1>Função uksort() - PHP</h1>
<p>A função <b>uksort()</b> também tem muito em comum com <b>usort()</b> e  <b>uasort()</b>. Recapitulando, ambas classificam/ordenam os arrays, e ambas possuem o "u" na frente, e somos nós usuários que criaremos a função de ordenar os dados do array. Mas, dessa vez, qual é o papel do "k" e porque ele faz o u<b>k</b>sort() ser diferente do usort() e do uasort()?</p>
<p>Como já vimos, a diferença entre o uasort() e o usort() está nas chaves, que o usort() ignora. Na função uksort(), a preferência é TOTALMENTE das chaves. Na uasort(), apesar das chaves permanecerem as mesmas quando os valores dos arrays são mudados de lugar, elas não são modificadas. Já o uksort() ordena as próprias chaves. Ou seja, a função que iremos criar será para ordenar o array pelas chaves, e não pelos valores, como vimos até agora.</p>
<h2>Sintaxe:</h2>
<p>uksort($arraycomchaves,"nome da funcao definida pelo usuario");</p>
<h2>Uso do uksort():</h2>
<p>O uso do uksort() é também parecido com o uasort(). Temos:
<ul>
	<li>1. A presença de uma função. </li>
	<li>2. A presença de um array COM CHAVES.</li>
	<li>3. A presença do próprio uksort(), com os parâmetros ARRAY e FUNÇÃO, respectivamente.<b>uksort($arraycomchaves,"nomedafuncao");</b></li>
	<li>4. E, seguindo o uasort(), como vamos manusear chaves, usaremos o foreach pra percorrer o array!</li>
</ul>
</p>
<p>Como dica pra você entender melhor a diferença entre uasort() e uksort(), pegue o exemplo do uksort() "uksort.php", rode e após verificar a saída, modifique a função uksort() para uasort(). Provavelmente a função trocará de alvo. No uksort() teremos a mudança nas chaves, e no uasort() nos valores.</p>									