<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Funções em PHP</title>
</head>
<body>
	<h1>Implode - Manual do PHP</h1>

       <p>
            (PHP 4, PHP 5, PHP 7)
            implode — Junta elementos de uma matriz em uma string
       </p>
       <p>
           Descrição 

            string implode ( string $glue , array $pieces )
            Retorna uma string contendo os elementos da matriz na mesma ordem com uma ligação entre cada elemento.
       </p>

    <h2>Implode - Blog DialHost</h2>
        <p>
            O implode foi criado como uma função reversa ao explode(). Sendo assim, ele faz a junção dos itens de um array em uma string simples. Para a utilização da função você pode passar dois parâmetros sendo que o primeiro se tornou opcional a partir da versão 4.3 do PHP.
        </p>
        <p>
            implode([string $separador] , array $palavras).
        </p>
        <P>
            No código acima temos a passagem dos 2 parâmetros necessários para o funcionamento da função. O primeiro $separador será um caractere que fará a separação das strings no array dentro desta nova string formada. Apesar de não ser mais necessário  a utilização deste parâmetro, usá-lo e a forma mais comum para os diversos tratamentos utilizados hoje.
        </P>
        <p>
            O segundo parâmetro é o array de palavras ou itens que você deseja colocar na string final. Por fim, aqui não temos um limitador igual na função explode, isto porque o limitador é o próprio array.
        </p>


</body>
</html>