<!DOCTYPE html>
<html>
<head>
	
	<title>range</title>

</head>
<body>
	Função range ()
	
	Descrição:
	
		É uma função que nos retorna uma sequência numérica conforme os parâmetros por nós definidos.
		
		Exemplo: 
		range($low, $high, $step=NULL);
		Os valores $low e $high devem ser definidos origatóriamente. $low representa o início da
		sequência numérica. Já o $high vai definir o final da sequência numérica.
		
		1- Gerando uma sequência numérica que comece com o número 1 até o número 5:
		
			<p>range(0, 5);
			>>> [0, 1, 2, 3, 4, 5]
			
		Como nós não definimos o parâmetro $step=NULL o intervalo da sequência numérica foi de apenas uma unidade.
		
		2- Gerando uma sequência numérica de números pares:
		
			<p>range(0, 10, 2);
			>>> [0, 2, 4, 6, 8, 10]
			
		É perceptível que foi incluído um terceiro valor na função. Este valor é o parâmetro $step=NULL,
		nele nós definimos a quantidade do intervalo da sequeência numérica.
	
</body>
</html>