<body>
	  
  A função substr_replace() Substitui o texto dentro de uma parte de uma string.

       substr_replace(string,replacement,start,length)
 

  Descrição:
      mixed substr_replace ( mixed $string , string $replacement , int $start [, int $length ] )
      substr_replace() substitui uma cópia de string delimitada pelos parâmetros start e (opcionalmente) length com a string dada em replacement.

  Parâmetros

   string
      A string de entrada.

   replacement
      A string substituta.

   start
      Se start é positivo, a substituição começará no start-ésimo caractere da string.

      Se start é negativo, a substituição começará no start-ésimo caractere do final de string.

      Se o parâmetro de início for um número negativo e o comprimento for menor ou igual ao começo, o comprimento se tornará 0.

   length
      Se dado e é positivo, ele representa o comprimento da porção de string que é para ser substituída. Se ele é negativo, ele representa o número de caracteres do final de string para parar de substituir. Se ele não é dado, então o padrão será até strlen( string ); i.e. o fim da substituição no final de string. Obviamente, se length é zero então esta função irá ter efeito de inserir replacement em string na dada posição start.

</body>