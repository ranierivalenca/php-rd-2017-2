<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>strnatcmp — Comparação de strings usando o algoritmo "natural order"
Descrição 
int strnatcmp ( string $str1 , string $str2 )

Esta função implementa um algoritmo de comparação de strings alfanumérico do jeito que um ser humano faz, isto é descrito como "ordem natural". Um exemplo da diferença entre este algoritmo e os algoritmos regulares de ordenação (usado em strcmp()) pode ser visto abaixo:</h1>
<h1>Valor de retorno: 	Esta função retorna:

    0 - se as duas seqüências são iguais
    <0 - se string1 for menor que string2
    > 0 - se string1 for maior que string2
</h1>

<?php
$arr1 = $arr2 = array("img12.png","img10.png","img2.png","img1.png"); // lembrancdo que esta função é case sensitive ela diferencia as maiusculas das minusculas. 
echo "Comparação de string padrão\n";
usort($arr1,"strcmp");
print_r($arr1);
echo "\nComparação usando ordem natural\n";
usort($arr2,"strnatcmp");
print_r($arr2);
?>
O código acima irá gerar a seguinte saída:

Comparação de string padrão
Array
(
    [0] => img1.png
    [1] => img10.png
    [2] => img12.png
    [3] => img2.png
)

Comparação usando ordem natural
Array
(
    [0] => img1.png
    [1] => img2.png
    [2] => img10.png
    [3] => img12.png
)

</body>
</html>