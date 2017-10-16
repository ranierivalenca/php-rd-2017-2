<!DOCTYPE html>
<html>
<head>

	<title>shuffle</title>
	
</head>
<body>

	Função shuffle
	
	Descrição:

		É uma fução que recebe um argumento e o mistura com uma ordem aleatória. No exemplo
		que iremos usar, criaremos um array com algumas imagens e usaremos esta função para 	
		misturar essas imagens e apresentá-las em alguma página em uma ordem aleatória a cada 	
		reload(f5) que o usuário der.

		Exemplo:
	
			<//table width=”100%” border=”0”>
			<//tr>

			<?php 
			$minhas_imgs = array(‘foto1.jpg’, ‘foto2.jpg’, ‘foto4.jpg’, ‘foto5.jpg’, ‘foto6.jpg’,
			‘foto7.jpg’, ‘foto8.jpg’, ‘foto9jpg’, ‘foto10.jpg’); --> criar um array que vai guardar minhas fotos
				
			shuffle($minhas_imgs); --> usar a função para misturar minhas imagens do array em uma ordem aleatória.
		
			for ($i = 0; $i < 3; $i++) { --> aqui usamos um for para ir percorrendo o array e seleciona é o número de imagens que você quer q apareça) e incrementa a cada for. 
		
			echo ‘<td align=”center”><p>//img src=” ‘; --> aqui abrimos uma td que irá conter a imagem 
		
			echo $minhas_imgs[$i]; --> aqui usamos a variável $minhas_imgs com o seu índice que a cada<br> iteração do for irá mudar.
			
			echo ‘ “><td>’; --> aqui o fechamento da tag img com o td. 
			
			}

			<tr><br>
			<table><br>
			?>
		
	Esta função é simples e bem útil para usar em sites de vendas que contenham anúncios de mercadorias<br> porque a cada visita do usuário, os produtos apresentados vão mudando e não ficam aquelas imagens <br>estáticas de sempre, pressionando a tecla f5, as imagens mudam.		
	
</body>
</html>