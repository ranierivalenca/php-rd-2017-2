<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Funções em PHP</title>
</head>
<body>
	<h1>Explode - Manual do PHP</h1>

       <p>
            explode

            (PHP 4, PHP 5, PHP 7)
            explode — Divide uma string em strings
       </p>
        
        <P>
            Valor Retornado 

            array explode ( string $delimiter , string $string [, int $limit ] )
            Retorna uma matriz de strings, cada uma como substring de string formada pela divisão dela a partir do delimiter.
        </P>

        <p>
            Parâmetros 

            delimiter
            O delimitador.

            string
            A string de entrada.

            limit
            Se limit é definido, o array retornado irá conter o máximo de elementos igual a limit com o último elemento contendo o resto da string.
        </p>

        <p>
            Se o parâmetro limit é negativo, todos componentes exceto o último -limit são retornados.

            Ainda que implode() pode por razões históricas aceitar seus parâmetros em uma das duas ordens, explode() não pode. Você deve assegurar que o argumento delimiter vem antes do argumento string.
        </p>

        <p>
            Valor Retornado 

            Se delimiter é uma string vazia (""), explode() irá retornar FALSE. Se delimiter contém um valor que não contém em string, então explode() irá retornar um array contendo string.
        </p>

        <p>
            Changelog 

            Versão  Descrição
            5.1.0   Suporte a limit negativo foi adicionado
            4.0.1   O parâmetro limit foi adicionado
        </p>

        <h2>Explode - Mauricio Programador</h2>

        <p>
            O comando explode do PHP divide uma string principal em partes menores com base em um caractere divisor, que pode ser um ponto e vírgula ou qualquer outro caractere ou string.
        </p>

        <p>
            A sintaxe do comando explode é:

            (array) explode([divisor], [string], [numero_divisões])
        </p>

        <p>
            Sendo que:
            array: É a saída do comando após sua execução, ele irá retornar um array;
            divisor: O caractere que deve ser encontrado dentro da string para dividir a mesma;
            String: O texto no qual queremos fazer a divisão;
            Número Divisões: É a quantidade de vezes que o comando deve repartir a string. Este parâmetro e opcional e se não informado a divisão se dará por toda string.
        </p>
</body>
</html>