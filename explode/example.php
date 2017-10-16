<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Funções em PHP</title>
</head>
<body>
	<h1>Exemplos do Manual do PHP</h1>
    <H2>Exemplo #1 explode() exemplos</H2>

        <?php
        // Example 1
        $pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
        $pieces = explode(" ", $pizza);
        echo $pieces[0]; // piece1
        echo $pieces[1]; // piece2

        // Example 2
        $data = "foo:*:1023:1000::/home/foo:/bin/sh";
        list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
        echo $user; // foo
        echo $pass; // *

        ?>

    <H2>Exemplo #2 Exemplos de parâmetro limit</H2>

        <?php
        $str = 'one|two|three|four';

        // positive limit
        print_r(explode('|', $str, 2));

        // negative limit (since PHP 5.1)
        print_r(explode('|', $str, -1));
        ?>
    <P>
        O exemplo acima irá imprimir:

        Array
        (
            [0] => one
            [1] => two|three|four
        )
        Array
        (
            [0] => one
            [1] => two
            [2] => three
        )
    </P>

    <h2>Exemplo - Mauricio Programador</h2>

    <p>
        Para o nosso exemplo suponhamos que temos um texto no seguinte formato:

         Fernando;21;Porto Alegre

        Neste exemplo temos uma linha de texto com várias informações como Nome, idade e cidade. Para separar estas informações vamos ao exemplo usando o comando explode.
    </p>

        <?php
         $string = "Fernando;21;Porto Alegre";

         $array = explode(';', $string);

         foreach($array as $valores)
         {
          echo $valores . '<br />';
         }

         /*
          * Resultado:
          * 
          *  Fernando
          *  21
          *  Porto Alegre
          * 
          */
        ?>



</body>
</html>