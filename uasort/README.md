<h1>Função uasort() - PHP</h1>
<p>As funções <b>uasort()</b> e <b>usort()</b> são parecidíssimas. Ambas classificam/ordenam os arrays, e ambas possuem o "u" na frente, o que já nos sinaliza que somos nós usuários que criaremos a função de ordenar os dados do array. Mas, qual é o papel do "a" e porque ele faz o u<b>a</b>sort() ser diferente do usort()?</p>
<p>O usort(), como eu já disse, ordena os arrays com uma função de comparação definida pelo usuário.Só que ele só leva em consideração os valores do array, e não as chaves. Ou seja, quando ele ordena, as chaves do array passam a ser índices. O uasort() vem justamente para mudar isso. Ele leva em consideração as chaves e as mantém. Ou seja, se um valor com chave "amarelo", por exemplo, mudar de local no array, ele continuará tendo a chave "amarelo", o que não aconteceria com o usort().</p>
<h2>Sintaxe:</h2>
<p>uasort($arraycomchaves,"nome da funcao definida pelo usuario");</p>
<h2>Uso do uasort():</h2>
<p>O uso do uasort() é (quase) o mesmo do usort(). Temos:
<ul>
    <li>1. A presença de uma função. </li>
    <li>2. A presença de um array COM CHAVES.</li>
    <li>3. A presença do próprio uasort(), com os parâmetros ARRAY e FUNÇÃO, respectivamente.<b>uasort($arraycomchaves,"nomedafuncao");</b></li>
    <li>4. E nesse caso, como vamos manusear chaves, usaremos o foreach pra percorrer o array!</li>
</ul>
</p>
<p>Como dica pra você entender melhor a diferença entre usort() e uasort(), pegue o exemplo do uasort(), rode e após verificar a saída, modifique a função uasort() para usort(). Você perceberá que as chaves deixarão de ser as mesmas e passarão a ser números de índices.</p>