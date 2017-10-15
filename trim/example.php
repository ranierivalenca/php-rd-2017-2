<?php
$var1 = "     Hello world     ";
$var2=  "     Hello world     ";
echo (trim($var1)),PHP_EOL; // o resultado será "Hello world ".
echo ($var2); // Observe que sem a funcão trim(); Os espaços ficam antes e depois da string "   Hello world    ".
?>


<?php
/*Esta função remove qualquer caracter de controle de fluxo de texto ou espaços. Caso queira determinar qual caracter de controle de fluxo desejamos remover, devemos especificar com um segundo parâmetro opcional.

No exemplo abaixo, iremos remover todas as quebras de linha, mas conservaremos os espaços.*/

$var1 = "   Hello world   " . "\n" . "\n" . "\n";

/* '\n' é uma quebra de linha, como se
4.
tivéssemos pressionado a tecla ENTER */

echo (trim($var1, "\n"));

// o resultado será "  Hello world   "

?>



