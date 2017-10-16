<?php
echo strcasecmp("Hello world!","HELLO WORLD!");

//Se esta função retornar 0,as duas strings são iguais lembrando que com a função strcasecmp ele ignora as letras maiusculas e minusculas.


echo strcasecmp("Hello world!","HELLO WORLD!")."<br>"; // As duas strings são iguais.
echo strcasecmp("Hello world!","HELLO")."<br>"; // String1 é maior que a  string2
echo strcasecmp("Hello world!","HELLO WORLD! HELLO!")."<br>"; // String1 é menor que a  string2 




?>

