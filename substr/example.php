<?php


echo substr('abcdef', 1);     // bcdef
// note o que vai ser impresso, se colocar só o numero 1 depois da virgula, a palvra só vai ser impresso depois de pular uma letra.
echo substr('abcdef', 1, 3);  // bcd
echo substr('abcdef', 0, 4);  // abcd
echo substr('abcdef', 0, 8);  // abcdef
echo substr('abcdef', -1, 1); // f

// Essa função é utilizada quando você for retorna algo que ninguém pode saber a palavra ou a frase completa quando você que oculta algo.
//
$string = 'abcdef';
echo $string{0};                 // a
echo $string{3};                 // d
echo $string{strlen($string)-1}; // f

?>