<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

   <p>  $text = 'This is a test';</p>

   <p>// O resultado sera 14, pós a função vai lê caracte por caracte contado com os espaço. "note também que quando nós passamos só mente um parametro o nome da função sera <b>strlen</b>"</p>
   <p>echo strlen($text); </p>
<?php
  $text = 'This is a test';
// O resultado sera 14, pós a função vai lê caracte por caracte contado com os espaço.
echo strlen($text); 
?>
   <p>// O resultado sera 2, pós foi definido o segundo parametro que era para procura quantas palavras is tem na frase, e sera retornado o numero 2.</p>
   <p>echo substr_count($text, 'is'); </p>
<?php

// O resultado sera 2, pós foi definido o segundo parametro que era para procura quantas palavras is tem na frase, e sera retornado o numero 2.
echo substr_count($text, 'is'); 
?> 
   <p>// O resultado sera 1, pós também foi definido o terceiro parametro que diz de onde deve começar a leitura, então note que depois de três caracter a letra que vem é s dai por de antes só tem mas um is.
</p>
   <p>echo substr_count($text, 'is', 3);</p>
<?php
// O resultado sera 1, pós também foi definido o terceiro parametro que diz de onde deve começar a leitura, então note que depois de três caracter a letra que vem é s dai por de antes só tem mas um is.
echo substr_count($text, 'is', 3);

?>
    <p>// O resultado sera 0, pós no quarto parametro diz até onde deve ser lido a String.</p>
    <p>echo substr_count($text, 'is', 3, 3);</p>
<?php
// O resultado sera 0, pós no quarto parametro diz até onde deve ser lido a String.
echo substr_count($text, 'is', 3, 3);
?>
     <p>$text2 = 'gcdgcdgcd';</p>
     <p>// O resultado sera 1 por a String é lida caracte por caracte quando a contagem chegar no caracter 6 ele vai vê que bate com a palavra que foi colocada no parametro, dai ele começa a contar de novo de onde ele parou.
</p>
     <p>echo substr_count($text2, 'gcdgcd');</p>
<?php

// O resultado sera 1 por a String é lida caracte por caracte quando a contagem chegar no caracter 6 ele vai vê que bate com a palavra que foi colocada no parametro, dai ele começa a contar de novo de onde ele parou.
$text2 = 'gcdgcdgcd';
echo substr_count($text2, 'gcdgcd');
?>



</body>
</html>
